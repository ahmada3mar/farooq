<?php

namespace App\Nova\Metrics;

use App\Models\UserCourse;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;

class ParchusedCourses extends Value
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */


    public function calculate(NovaRequest $request)
    {

        return $this->count($request , UserCourse::class )->suffix('courses');

        // $value = User::has('courses' , '>=' , 1)
        // ->role('user')
        // ->select('id')
        // ->setEagerLoads([])
        // ->withCount('courses')
        // ->get()
        // ->sum('courses_count');


        // return [
        //     'value' => $value,
        //     'previous' => 3,
        //     'previousLabel' => 'previousLabel',
        //     'prefix' => null,
        //     'suffix' => 'course',
        //     'suffixInflection' =>null,
        //     'format' => '0',
        //     'zeroResult' =>0,
        // ];

        // $courses = User::withCount('courses')->get();

        // return  $this->result(
        //     $courses->flatMap(function ($course) {
        //         return [
        //             $course->name => $course->users_count
        //         ];
        //     })->toArray()
        // );
    }

    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
    public function ranges()
    {
        return [
            30 => __('30 Days'),
            60 => __('60 Days'),
            365 => __('365 Days'),
            'TODAY' => __('Today'),
            'MTD' => __('Month To Date'),
            'QTD' => __('Quarter To Date'),
            'YTD' => __('Year To Date'),
        ];
    }

    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return  \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        // return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'parchused-courses';
    }
}
