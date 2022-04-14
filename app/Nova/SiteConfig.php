<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use \Epartment\NovaDependencyContainer\NovaDependencyContainer ;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Trix;
use Timothyasp\Color\Color;

class SiteConfig extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\SiteConfig::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';
    // public static $viaRelationship = 'question';

    public static $group = 'settings';


    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('site_config');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('site_config');
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'key'
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

            Text::make(__('key'), 'key')
                ->sortable()
                ->rules('required', 'max:255'),

                Select::make( __('type'), 'type')
                ->options([
                    '0' => __('text'),
                    '1' => __('image'),
                    '2' => __('color'),
                ])
                ->displayUsingLabels()
                ->creationRules('required', 'numeric')
                ->updateRules('nullable', 'numeric'),

            NovaDependencyContainer::make([
                Trix::make( __('value'), 'value')
                ->rules('required'),
            ])->dependsOn('type' , 0),

            NovaDependencyContainer::make([
                Image::make( __('value'), 'value')
                ->rules('required'),
            ])->dependsOn('type' , 1),

            NovaDependencyContainer::make([
                Color::make( __('value'), 'value')
                ->slider()
                ->rules('required'),
            ])->dependsOn('type' , 2),

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
