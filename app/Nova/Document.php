<?php

namespace App\Nova;

use App\Rules\CustomRule;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Models\Section;
use App\Models\DocumentCourse;
use Farooq\UnitPicker\UnitPicker;

class Document extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Document::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name'
    ];

    public static $group = 'Files';


    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->hideFromIndex(),
            Text::make('name')
            ->sortable()
            ->creationRules('required', 'max:255')
            ->updateRules('required', 'max:255')
            ->rules(new CustomRule()),
            
            Select::make(__('Type'), 'Type')
                ->options([
                    1 => 'اسئلة سنوات',
                    2 => ' أوراق عمل',
                    3 => 'دوسيات',
                    4 => 'الكتب',
                ])
                ->creationRules('required', 'numeric', 'min:1', 'max:12')
                ->sortable()
                ->updateRules('nullable', 'numeric', 'min:1', 'max:12'),

                Select::make( __('section'), 'section_id')
                ->options(Section::pluck('name' , 'id')->toArray())
                ->rules('required', 'numeric'),

                Select::make( __('course'), 'document_course_id')
                ->options(DocumentCourse::pluck('name' , 'id')->toArray())
                ->rules('required', 'numeric'),


            File::make('path')->rules('file' , 'max:80000'),

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
