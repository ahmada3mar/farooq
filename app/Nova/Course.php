<?php

namespace App\Nova;

use App\Models\Section;
use App\Nova\Section as NovaSection;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Farooq\Checkboxes\Checkboxes;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Spatie\Permission\Models\Permission;
use Yassi\NestedForm\NestedForm;


class Course extends ResourceForUser
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

            Image::make(__('iamge'), 'image')->maxWidth(50),
            Image::make(__('cover'), 'cover')->maxWidth(50)->hideFromIndex(),

            Text::make(__('name'), 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make(__('description'), 'description')
                ->sortable()
                ->rules('required',  'max:254'),


            Select::make(__('class'), 'class')
                ->options([
                    1 => 'الأول',
                    2 => 'الثاني',
                    3 => 'الثالث',
                    4 => 'الرابع',
                    5 => 'الخامس',
                    6 => 'السادس',
                    7 => 'السابع',
                    8 => 'الثامن',
                    19 => 'التاسع',
                    10 => 'العاشر',
                    11 => 'الأول ثانوي',
                    12 => 'الثاني ثانوي',
                ])
                ->creationRules('required', 'numeric', 'min:1', 'max:12')
                ->updateRules('nullable', 'numeric', 'min:1', 'max:12'),

                NovaDependencyContainer::make([
                    Select::make( __('section'), 'section_id')
                    ->options(Section::pluck('name' , 'id')->toArray())
                    ->rules('required', 'numeric'),
                ])->dependsOn('class' , 11 )->dependsOn('class' , 12),

            Number::make(__('price'), 'price')
                ->creationRules('required', 'numeric')
                ->updateRules('nullable', 'numeric'),

            NestedForm::make('Unit', 'units', Unit::class),
            HasMany::make(__('units'), 'units', Unit::class)->nullable(),

            BelongsTo::make(__('instructor'), 'user', User::class)
            ->withMeta(['placeholder' => trans('contant.sel_instructor')]
            )->searchable()
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
