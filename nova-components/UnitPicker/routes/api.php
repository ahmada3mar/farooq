<?php

use Farooq\UnitPicker\Http\Controllers\FieldController;
// use Illuminate\Support\Facades\Route;

Route::post('/', FieldController::class  . '@index');
Route::post('/get-courses', FieldController::class  . '@course');

