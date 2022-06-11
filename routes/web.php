<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\SellPointsController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Document;
use App\Models\Section;
use Inertia\Inertia;




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

Route::get('/test' , function () {
    // $sections = Section::with('documentCourses')->orderBy('Order')->get();

    dd(Section::with('documentCourses.documents')->orderBy('Order')->get());
    // return Inertia::render('Home');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);


Route::resource('documents', DocumentsController::class);
Route::get('/documents', [DocumentsController::class, 'index']);
Route::get('/document/download/{document}', [DocumentsController::class, 'pre_download']);
Route::get('/document/download_file/{path}/{name}', [DocumentsController::class, 'download']);
Route::get('/download/{path}/{name}/{ext}', [CourseController::class, 'download']);

Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/Instructors', [InstructorsController::class, 'index']);
Route::get('/Selling-Points', [SellPointsController::class, 'index']);
Route::resource('users', UserController::class);
Route::get('/profile/{user}', [UserController::class, 'profile']);



Route::get('/login', [LoginController::class, 'loginIndex'])->name('login');
Route::get('/Register', [LoginController::class, 'registerIndex']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [LoginController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::get('/course/{id}', [CourseController::class, 'index']);
    Route::post('/check-answer/{answer}', [CourseController::class, 'checkAnswer']);
    Route::post('/get-answers/{question}', [CourseController::class, 'getUserAnsers']);
    Route::get('/logout', [LoginController::class, 'logout']);
});


Route::get('/403', function () {
    return Inertia::render('403');
});


Route::fallback(function () {
    return Inertia::render('404');
});
