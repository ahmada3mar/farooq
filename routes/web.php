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
use App\Models\Unit;
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

Route::get('/test', function () {
    dd(User::has('courses', '>=', 2)->select('id')->setEagerLoads([])
        ->role('user')
        ->withCount('courses')->get());
});

// Route::get('/document/download/{id}', [DocumentsController::class, 'download']);
Route::get('/download/{path}/{name}/{ext}', function ($path, $name, $ext) {

    return response()->download(storage_path("app/public/$path"), $name . '.' . $ext);
});

Route::resource('documents', DocumentsController::class);

Route::get('/document/download/{id}', function ($id) {

    $document = Document::findOrFail($id);
    $document->increment('downloads');
    return response()->download(storage_path("app/public/$document->path"), "$document->name" . '.' . substr(strrchr($document->path, "."), 1));
});

//footer sittings that will show in all pages

// Route::get('/test', function () {
//     $rrr = User::with('courses')->role('instructor')->first();

//     return Inertia::render('Test', ['video' => Lecture::first()->url]);
// });

Route::resource('users', UserController::class);


Route::get('/', [HomeController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/contact', [ContactController::class, 'index']);


Route::get('/profile/{user}', function (User $user) {

    return Inertia::render('Profile2', compact('user'));
});

Route::get('/403', function () {
    return Inertia::render('403');
});

Route::get('/login', [LoginController::class , 'loginIndex']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/Register', [LoginController::class , 'registerIndex']);

Route::post('/register', [LoginController::class, 'register']);

Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/documents', [DocumentsController::class, 'index']);

Route::middleware('auth')->group(function () {

    Route::get('/course/{id}', [CourseController::class, 'index']);
    Route::post('/check-answer/{answer}', [CourseController::class, 'checkAnswer']);
    Route::post('/get-answers/{question}', [CourseController::class, 'getUserAnsers']);

});

Route::fallback(function () {
    return Inertia::render('404');
});
