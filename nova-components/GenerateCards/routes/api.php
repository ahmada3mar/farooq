<?php

use App\Exports\CardsExport;
use App\Models\Card;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Nova\Actions\Action;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;


/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::get('/', function (Request $request) {
    return Course::where('name' ,'like', '%' . $request['name'] . '%')->get();
});

Route::post('/cards', function (Request $request) {

    $count = $request->count ?? 0;
    $course_id = $request->course_id;
    $course = Course::find($course_id);
    $course_name = $course ? $course->name : null;

    $data = [];

    for ($i=0; $i <  $count; $i++) {
        $serial = Card::random();
        $pass = Str::random(6);
       $data[] = [
           'serial_number' => $serial,
           'password' => $pass,
           'course_id' => $course_id,
           'created_at'=>date('Y-m-d H:i:s'),
           'updated_at'=>date('Y-m-d H:i:s'),
       ];
       $excel[]= [
        'serial_number' => $serial,
        'password' => $pass,
        'course_name' => $course_name
       ];
    }

    Card::insert($data);

    return Excel::download(new CardsExport($excel), 'cards.xlsx');

});
