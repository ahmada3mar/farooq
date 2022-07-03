<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellPointsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get("/test", function (Request $req) {
});

Route::get('/', [HomeController::class, 'index'])->name('home');
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
Route::get('/profile/{user}', [UserController::class, 'profile'])->name('profile');


Route::get('/login', [LoginController::class, 'loginIndex'])->name('login');
Route::get('/Register', [LoginController::class, 'registerIndex']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [LoginController::class, 'register']);

Route::middleware('guest')->group(function(){
    Route::get('/forgot-password', [PasswordController::class , "forgot"])->name('password.request');
    Route::post('/forgot-password', [PasswordController::class , "reset"])->name('password.email');
    Route::get('/reset-password/{token}', [PasswordController::class , "token"])->name('password.reset');
    Route::post('/reset-password' ,[PasswordController::class , "update"])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/verification/{data}', [UserController::class, 'verification']);
    Route::get('/send-email', [UserController::class, 'sendEmail']);
    Route::get("/verification-failed", function () {
        return Inertia::render('Fail');
    })->name('verification_failed');

    Route::get('/course/{id}', [CourseController::class, 'index']);
    Route::get('/purchase/{course}', [CourseController::class, 'purchase']);
    Route::post('/confirm/{course}', [CourseController::class, 'confirm']);
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
