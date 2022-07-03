<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Document;
use App\Models\Section;
use App\Models\SiteConfig;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use Laravel\Nova\Http\Requests\NovaRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = SiteConfig::where('key', 'LIKE', 'home%')->get();


        $courses = Course::with('user' , 'section')->inRandomOrder()->limit(4)->get();

        $QA = Document::where('Type', 1)->orderBy('downloads' , 'DESC')->limit(4)->get();
        $workPapers = Document::where('Type', 2)->orderBy('downloads' , 'DESC')->limit(4)->get();
        $dosis = Document::where('Type', 3)->orderBy('downloads' , 'DESC')->limit(4)->get();
        $books = Document::where('Type', 4)->orderBy('downloads' , 'DESC')->limit(4)->get();


        $mostSelling = Course::orderBy('subscriber' , 'DESC')->limit(4)->get();

        $instructos = User::with('courses')->role('instructor')->get();


        return Inertia::render('Home', compact('settings' , 'courses' , 'mostSelling' , 'instructos' , 'QA', 'workPapers', 'dosis', 'books'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function test(NovaRequest $request)
    {

        $resource = new $request->resourceClass($request->resourceClass::newModel());


        return \response('server 5raaa' , 500);
        Log::alert($request->getContent());
        return \response('ok');
    }

    public function ssl()
    {
       return response()->download(\public_path('/assets/ssl/B4959002757F80C0696D11A55A6748DF.txt'), 'B4959002757F80C0696D11A55A6748DF.txt');
    }
}
