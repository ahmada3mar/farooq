<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DocumentsController;
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
use App\Http\Middleware\AllPagesConfig;
use App\Models\Document;
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
Route::get('/.well-known/pki-validation/B4959002757F80C0696D11A55A6748DF.txt' , [HomeController::class , 'ssl']);
// Route::get('/document/download/{id}', [DocumentsController::class, 'download']);
Route::get('/download/{path}/{name}/{ext}' , function($path,$name , $ext){


    return response()->download(storage_path("app/public/$path") , $name . '.' . $ext );

});
Route::resource('documents', DocumentsController::class);
Route::get('/document/download/{id}' , function($id){

    $document = Document::findOrFail($id);
    $document->increment('downloads');
    return response()->download(storage_path("app/public/$document->path") , "$document->name" . '.' . substr(strrchr($document->path, "."), 1) );

});

//footer sittings that will show in all pages


    Route::get('/.well-known/pki-validation/A71EDACBF7A28EB9FB2A4AAEBF4B150C.txt', [HomeController::class, 'ssl']);

    Route::get('/test', function () {
        $rrr = User::with('courses')->role('instructor')->first();

        return Inertia::render('Test', ['video' => Lecture::first()->url]);
    });

    Route::resource('users', UserController::class);


    Route::get('/', [HomeController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/contact', [ContactController::class, 'index']);

    Route::get('/404', function () {
        return Inertia::render('404');
    });

    Route::get('/profile/{user}', function (User $user) {
        return Inertia::render('Profile2', compact('user'));
    });

    Route::get('/403', function () {
        return Inertia::render('403');
    });

    Route::get('/login', function () {
        if (Auth::check()) {
            return redirect()->intended('/');
        }
        return Inertia::render('Login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/Register', function () {
        return Inertia::render('Register');
    })->name('Register');

    Route::post('/register', [LoginController::class , 'register']);

    Route::get('/courses', [CoursesController::class, 'index']);
    Route::get('/documents', [DocumentsController::class, 'index']);

    Route::middleware('auth')->group(function () {
        Route::get('/course/{id}', [CourseController::class, 'index']);
        // Route::get('/course/{id}', function ($id) {

        //     return Inertia::render('course2', ['course' => Course::with('units.lectures.question.answers')->find($id)]);
        // });
        Route::get('/course2/{id}', function ($id) {

            // dd(Course::with('units.lectures.question.answers')->find($id));
            return Inertia::render('course2', ['course' => Course::with('units.lectures.question.answers')->find($id)]);
        });
    });

    Route::fallback(function () {
        return Inertia::render('404');
    });

