<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Document::query();

        if($request->has('class')){
            $query->where('class' , $request->class);
        }

        if($request->has('section')){
            $query->whereHas('section' , function($q) use ($request){
               return $q->where('id',  $request->section);
            });
        }

        if($request->has('category')){
            switch ($request->category) {
                case 'primary':
                    $query->where('class' , '<=' , 6);
                    break;

                case 'secondary':
                    $query->where('class' , '>=' , 7)->where('class' , '<=' , 10);
                    break;

                case 'highschool':
                    $query->where('class' , '>' , 10);
                    break;
            }
        }

        if($request->has('name')){
            $query->where('name' , 'LIKE %' , "{$request->class}%");
        }

       $courses =  $query->with('user')->withCount('lectures')->latest()->paginate(20);

        return Inertia::render('Courses' , compact('courses' , 'sections'));

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
}
