<?php

namespace App\Nova\Metrics;

use App\Models\Section;
use App\Models\User;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class UsersPerSection extends Partition
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $sections = Section::withCount('users')->get();

        return $this->result(
            $sections->flatMap(function ($section) {
                return [
                    $section->name => $section->users_count
                ];
            })->toArray()
        )
        ->colors([
            'علمي' => '#008aac',
            'أدبي' => '#5FD89A',
        ]);
    }

    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return  \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'users-per-section';
    }
}
