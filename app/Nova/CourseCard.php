<?php

namespace App\Nova;

use App\Nova\Actions\GenerateCards;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;


class CourseCard extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Card::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'serial_number';




    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('Cards');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Card');
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'serial_number', 'password'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public static $group = 'settings';


    public function fields(Request $request)
    {
        return [

            Text::make(__('Serial Number'), 'serial_number')
                ->hideWhenCreating()
                ->rules('required', 'max:255'),

            Text::make(__('Password'), 'password')
                ->hideWhenCreating()
                ->rules('required', 'max:255'),

            Boolean::make('Printed', 'is_printed')
                ->hideWhenCreating()
                ->falseValue('0')
                ->trueValue('1'),

            Boolean::make('Active', 'is_active')
                ->hideWhenCreating()
                ->falseValue('0')
                ->trueValue('1'),
            BelongsTo::make('Course', 'course', Course::class)->nullable()

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            new GenerateCards()

        ];
    }
}
