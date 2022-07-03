<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;


class Unit extends ResourceForUser
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Unit::class;

    public static $displayInNavigation = false;


    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    // public static $group = 'courses';

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('units');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('unit');
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name', 'description',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public static function relation($query  , $request){
        // dd($query)
        $user = $request->user();

        return $query->whereHas('course',function($q) use($user){
            return $q -> where('user_id', $user->id);
        } );

    }


    public function fields(Request $request)
    {
        return [
            ID::make()->hideFromIndex(),


            Text::make(__('name'), 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make( __('description'), 'description')
                ->sortable()
                ->rules('max:254'),



            Number::make( __('order') , 'order')
                ->creationRules('required', 'numeric', 'min:1')
                ->updateRules('nullable', 'numeric', 'min:1'),

            HasMany::make( __('lectures') , 'lectures' , Lecture::class)->nullable(),

            BelongsTo::make( __('course') , 'course' , Course::class),

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
        return [];
    }
}
