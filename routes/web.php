<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    $username = [
        'name' => 'ahmad' ,
        'age' => 26
    ];

    return Inertia::render('Home' , compact('username'));
});
Route::get('/Contact', function () {
    return Inertia::render('Contact');
});
Route::get('/404', function () {
    return Inertia::render('404');
});
Route::get('/403', function () {
    return Inertia::render('403');
});
