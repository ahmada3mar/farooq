<?php

use Illuminate\Support\Facades\Route;
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

Route::group([
    'prefix' => '',
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
    Route::get('/403', function () {
        return Inertia::render('403');
    });
});
