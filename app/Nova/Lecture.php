<?php

namespace App\Nova;

use App\Models\Course;
use App\Models\Unit;
use App\Nova\Course as NovaCourse;
use App\Nova\Unit as NovaUnit;
use Carbon\Carbon;
use Emilianotisato\NovaBelongstoDepends\BelongstoDepends;
// use Emilianotisato\NovaBelongstoDepends\BelongstoDepends;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use \Epartment\NovaDependencyContainer\NovaDependencyContainer ;
use Farooq\UnitPicker\UnitPicker;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Yassi\NestedForm\NestedForm;
// use Emilianotisato\NovaBelongstoDepends\BelongstoDepends;

class Lecture extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Lecture::class;

    protected $course_id = 5;
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';
    // public static $viaRelationship = 'question';

    public static $group = 'courses';


    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('lectures');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('lectures');
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */



    public function fields(Request $request)
    {

        // dd(BelongstoDepends::class);
        // $units = Unit::where('course_id' , $this->course_id)->pluck('name' , 'id')->toArray();
        return [

            ID::make()->hideFromIndex(),
        //     Text::make('Uuid')->default(function ($request) {
        //         $resource = new $request->resourceClass(NovaUnit::newModel());
        // dd($resource->fields($request));
        //         // return Str::orderedUuid();
        //     }),




            // BelongsToDependency::make( __('unit') , 'unit' , NovaUnit::class)->dependsOn('id' , 1 ),

            Text::make(__('name'), 'name')
                ->sortable()
                ->rules('required', 'max:255'),

                UnitPicker::make('course' )->setReq($request)->options(Course::take(5)->get()),

                UnitPicker::make( 'unit' )->setReq($request)->dependsOn('course'),


            Number::make( __('order') , 'order')
                ->creationRules('required', 'numeric', 'min:1')
                ->updateRules('nullable', 'numeric', 'min:1'),

            Select::make( __('type'), 'type')
                ->options([
                    '0' => __('video'),
                    '1' => __('question'),
                ])
                ->displayUsingLabels()
                ->creationRules('required', 'numeric')
                ->updateRules('nullable', 'numeric'),

            NovaDependencyContainer::make([
                Text::make( __('url'), 'url')
                ->rules('required'),
            ])->dependsOn('type' , 0),

            HasMany::make( 'question', 'question' , Question::class),

            HasMany::make(__('Attachments'), 'attachment', Attachment::class)->nullable(),

            // NestedForm::make('Attachment', 'attachment', Attachment::class),


        //    NestedForm::make('Question' , 'question' , Question::class)
        //    ->hideWhenUpdating()
        //    ->max(1)
        //     ->displayIf(function ($nestedForm, $request) {
        //         return [
        //              [ 'attribute' => 'type', 'is' => '1' ]
        //         ];
        //     }),

            Trix::make( __('description'), 'description')
                ->rules('required'),

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
