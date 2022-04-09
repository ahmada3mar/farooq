<?php

use App\Http\Controllers\UserController;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test' , function(){
    return Inertia::render('Test',['video' => Lecture::first()->url]);
});

Route::resource('users', UserController::class);

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'  ]
], function () {

    Route::get('/', function () {
        $tt = trans('auth.failed');

        return Inertia::render('Home', compact('tt'));
    });
    Route::get('/contact', function () {
        return Inertia::render('Contact');
    });
    Route::get('/404', function () {
        return Inertia::render('404');
    });
    Route::get('/course/{id}', function ($id) {

        // $rr = Course::with('units.lectures')->first() ;
        // dd($rr->units->lectures->where('id' , $l_id));
        return Inertia::render('course',['course' => Course::with('units.lectures.question.answers')->find($id)]);
    });
    Route::get('/403', function () {
        return Inertia::render('403');
    });
});
