<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response as FacadesResponse;
use Inertia\Inertia;
use Laravel\Nova\Fields\File;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $docs = Document::orderBy('downloads' , 'DESC')->limit(5)->get();
        $sections = Section::with('documentCourses')->orderBy('Order')->get();

        $query = Document::query();

        if($request->has('course')){
            $query->where('document_course_id' , $request->course);
        }
        if($request->has('section')){
            $query->where('section_id' , $request->section);
        }
        if($request->has('type')){
            $query->where('type' , $request->type);
        }
        if($request->has('top')){
            $query->orderBy('downloads' , 'DESC')->limit(5);
        }


       $docs =  $query->with('documentCourse')->with('section')->get();

       $types = [
        [ 'key' => 1, 'value' => 'اسئلة سنوات'],
        [ 'key' => 2, 'value' => ' أوراق عمل'],
        [ 'key' =>3, 'value' => 'دوسيات'],
        [ 'key' =>4, 'value' => 'الكتب'],
       ];


        return Inertia::render('Documents' , compact('docs', 'sections' , 'types'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pre_download(Document $document)
    {
        $document->increment('downloads');

        return redirect(env('APP_URL') .'/document/download_file/'.$document->path.'/'.$document->name);

        // return response()->download(storage_path("app/public/$document->path"), "$document->name" . '.' . substr(strrchr($document->path, "."), 1));
    }
    public function download( $path, $name)
    {

        return response()->download(storage_path("app/public/$path"), $name . '.' . substr(strrchr($path, "."), 1));
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
}
