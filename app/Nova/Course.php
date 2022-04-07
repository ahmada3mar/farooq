<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Vyuldashev\NovaPermission\RoleSelect;
use Yassi\NestedForm\NestedForm;



class Course extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Course::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    public static $group = 'courses';


    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('courses');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('course');
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

    public static function relatableUsers(NovaRequest $request, $query)
    {
        return $query->Role('instructor');
    }


    public function fields(Request $request)
    {
        return [
            ID::make()->hideFromIndex(),

            Image::make( __('iamge'),'image')->maxWidth(50),
            Image::make( __('cover'), 'cover')->maxWidth(50)->hideFromIndex(),

            Text::make(__('name'), 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make( __('description'), 'description')
                ->sortable()
                ->rules('required',  'max:254'),


            Number::make( __('class') , 'class')
                ->creationRules('required', 'numeric', 'min:1', 'max:12')
                ->updateRules('nullable', 'numeric', 'min:1', 'max:12'),

            Number::make( __('price'), 'price')
                ->creationRules('required', 'numeric')
                ->updateRules('nullable', 'numeric'),

                NestedForm::make('Unit' , 'units' , Unit::class),
            HasMany::make( __('units') , 'units' , unit::class)->nullable(),
            HasMany::make( __('lectures') , 'lectures' , Lecture::class)->nullable(),

            BelongsTo::make( __('instructor'), 'user', User::class)->withMeta(['placeholder'=>trans('contant.sel_instructor')])

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
