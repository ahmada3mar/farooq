<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Attachment;
use App\Models\Course;
use App\Models\Question;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $course = Course::with('units.lectures.question.answers')->with('units.lectures.attachment')->find($request->id);
        return Inertia::render('course2', compact('course' ));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function checkAnswer(Answer $answer){
        $user_id =Auth::user()->id ;

        UserAnswer::updateOrCreate(['user_id' => $user_id  , 'question_id' => $answer->question_id] ,[ 'answer_id' => $answer->id]);

        return Answer::select('id')->where('question_id' , $answer->question_id)
        ->where('is_correct' , 1)->pluck('id');
    }

    public function getUserAnsers(Question $question){

        $user_id =Auth::user()->id ;

        $userAnswers = UserAnswer::select('answer_id')->where('user_id' , $user_id)
        ->whereHas('answer' ,function($a) use($question){
            $a->where('question_id' , $question->id);
        })->pluck('answer_id');

        $correctAnswers = $question->answers()->where('is_correct' ,1)->pluck('id');

        $res = [
            'userAnswers' =>$userAnswers,
            'correctAnswers' =>$correctAnswers,
        ];

        return $res;
    }
}
