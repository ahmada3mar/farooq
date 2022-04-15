<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\Section;
use App\Models\SiteConfig;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Nova\Http\Controllers\LoginController as ControllersLoginController;
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
    $rrr = User::with('courses')->role('instructor')->first();

    return Inertia::render('Test',['video' => Lecture::first()->url]);
});

Route::resource('users', UserController::class);


    Route::get('/' , [HomeController::class , 'index']);
    Route::get('/logout' , [LoginController::class , 'logout']);

    Route::get('/contact', function () {
        return Inertia::render('Contact');
    });
    Route::get('/404', function () {
        return Inertia::render('404');
    });

    Route::get('/profile', function () {
        return Inertia::render('Profile');
    });

    Route::get('/403', function () {
        return Inertia::render('403');
    });

Route::get('/login', function () {
    if(Auth::check()){
        return redirect()->intended('/');
    }
    return Inertia::render('Login');
})->name('login');
Route::post('/login', [LoginController::class , 'login']);

Route::get('/Register', function () {
    return Inertia::render('Register');
})->name('Register');
// Route::post('/Register', [RegisterController::class , 'Register']);


Route::middleware('auth')->group(function(){
    Route::get('/course/{id}', function ($id) {

        return Inertia::render('course',['course' => Course::with('units.lectures.question.answers')->find($id)]);
    });
    Route::get('/course2/{id}', function ($id) {

        // dd(Course::with('units.lectures.question.answers')->find($id));
        return Inertia::render('course2',['course' => Course::with('units.lectures.question.answers')->find($id)]);
    });
});

Route::fallback(function () {
    return Inertia::render('404');
});

