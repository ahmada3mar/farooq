<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

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
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

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
            ->rules('required', 'max:255'),
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
                ->sortable()
                ->updateRules('nullable', 'numeric', 'min:1', 'max:12'),
            Select::make(__('course'), 'course')
                ->options([
                    1 => 'التربية الإسلامية',
                    2 => 'اللغة العربية',
                    3 => 'تاريخ الأردن',
                    4 => 'علوم الحاسوب',
                    5 => 'اللغة الانجليزية',
                    6 => 'الرياضيات العلمي',
                    7 => 'الرياضيات الادبي',
                    8 => 'العلوم الحياتية',
                    19 => 'الفيزياء',
                    10 => 'الكيمياء',
                    11 => 'علوم الارض والبيئة',
                    12 => 'الثقافة المالية',
                    13 => 'العلوم الإسلامية',
                    14 => 'تاريخ العرب والعالم',
                    15 => 'البلاغة والنقد',
                    16 => 'قضايا أدبية',
                    17 => 'النحو والصرف',
                    18 => 'الجغرافيا',

                ])
                ->creationRules('required', 'numeric', 'min:1', 'max:12')
                ->sortable()
                ->updateRules('nullable', 'numeric', 'min:1', 'max:12'),
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
