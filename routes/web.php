<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Document;
use Inertia\Inertia;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);


Route::resource('documents', DocumentsController::class);
Route::get('/documents', [DocumentsController::class, 'index']);
Route::get('/document/download/{id}', [DocumentsController::class, 'download']);
Route::get('/download/{path}/{name}/{ext}', [CourseController::class, 'download']);

Route::get('/courses', [CoursesController::class, 'index']);
Route::resource('users', UserController::class);
Route::get('/profile/{user}', [UserController::class, 'profile']);



Route::get('/login', [LoginController::class, 'loginIndex']);
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
