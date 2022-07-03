<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Card;
use App\Models\Course;
use App\Models\Document;
use App\Models\Question;
use App\Models\UserAnswer;
use App\Models\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $course = Course::with('units.lectures.question.answers')->with('units.lectures.attachment')->with('user')->withCount('lectures')->find($request->id);

        if (!$course) {
            return Inertia::render('404');
        }

        $regestered_courses = Auth::user()->registerdCourses->pluck('id')->toArray();

        if (!in_array($course->id, $regestered_courses)) {
            foreach ($course->units as $unit) {
                foreach ($unit->lectures as &$lecture) {
                    if ($lecture->is_private)
                    unset($lecture->url);
                }
            }
        }



        $simmilerCourses = Course::query();

        if ($course->section_id) {
            $simmilerCourses->where('section_id', $course->section_id);
        }

        $simmilerCourses = $simmilerCourses->where('class', $course->class)->where('id', '!=', $course->id)->limit(4)->get();

        return Inertia::render('course2', compact('course', 'simmilerCourses'));
    }


    public function download($path, $name, $ext)
    {
        return response()->download(storage_path("app/public/$path"), $name . '.' . $ext);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function purchase(Request $request, $id)
    {
        $course  = Course::with('user')->withCount('lectures')->with(['units.lectures' => function ($q) {
            return $q->select('unit_id', 'name');;
        }])->find($id);

        return \view('purchase', compact('course'));
    }

    public function confirm(Request $request, $id)
    {
        $error =false;
        $validator = Validator::make($request->all(), [
            "password" => 'required',
            "serial_number" => "required|exists:cards,serial_number,password,{$request->password}",
        ]);

        if ($validator->fails()) {
            Session::flash("errors", "يرجى التاكد من رقم البطاقة و كلمة المرور");
             return redirect("/purchase/$id");
        }

        $card = Card::where("serial_number", $request->serial_number)
            ->where("password", $request->password)
            ->first();

        $regestered_courses = Auth::user()->registerdCourses->pluck('id')->toArray();


        if ($card->is_active != "1") {
            Session::flash("errors", "البطاقة غير فعالة");
             return redirect("/purchase/$id");
        }

        if (in_array($id , $regestered_courses)) {
            Session::flash("errors", "لا يمكن التسجيل في المساق مرة اخرى");
             return redirect("/purchase/$id");
        }

        if (isset($card->course_id) && $card->course_id != $id) {
            $name = $card->course->name;
            Session::flash("errors", " هذه البطاقة صالحة فقط لشراء  \n $name");
             return redirect("/purchase/$id");
        }

        UserCourse::create(["course_id"=>$id , "user_id"=>Auth::user()->id]);

        $card->update(["is_active"=>"0"]);

        return view("thankyou" , compact('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }

    public function checkAnswer(Answer $answer)
    {
        $user_id = Auth::user()->id;

        UserAnswer::updateOrCreate(['user_id' => $user_id, 'question_id' => $answer->question_id], ['answer_id' => $answer->id]);

        return Answer::select('id')->where('question_id', $answer->question_id)
            ->where('is_correct', 1)->pluck('id');
    }

    public function getUserAnsers(Question $question)
    {

        $user_id = Auth::user()->id;

        $userAnswers = UserAnswer::select('answer_id')->where('user_id', $user_id)
            ->whereHas('answer', function ($a) use ($question) {
                $a->where('question_id', $question->id);
            })->pluck('answer_id');

        $correctAnswers = $question->answers()->where('is_correct', 1)->pluck('id');

        $res = [
            'userAnswers' => $userAnswers,
            'correctAnswers' => $correctAnswers,
        ];

        return $res;
    }
}
