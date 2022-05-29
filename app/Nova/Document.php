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
            ->rules('required', 'max:255')
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

                UnitPicker::make('section' )->setReq($request)->options(Section::all()),

                UnitPicker::make( 'course' )->setReq($request)->dependsOn('section'),


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
