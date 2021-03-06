<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use \Epartment\NovaDependencyContainer\NovaDependencyContainer;
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
        return __('Configurations');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Configurations');
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

            Select::make(__('key'), 'key')
                ->options([
                    'home_shadow' => __('home shadow'),
                    'home_cover_image' => __('home cover image'),
                    'home_description' => __('home description'),
                    'home_description_color' => __('home description color'),
                    'about_alfarouq' => __('about alfarouq'),
                    'about_alfarouq_image' => __('about alfarouq image'),
                    'about_alfarouq_message' => __('alfarouq message'),
                    'about_alfarouq_vision' => __('alfarouq vision'),
                    'web_facebook' => __('facebook'),
                    'web_twitter' => __('twitter'),
                    'web_linkedin' => __('linkedin'),
                    'web_instagram' => __('instagram'),
                    'web_TikTok' => __('TikTok'),
                    'web_youtube' => __('youtube'),
                    'support_mobile' => __('Support Mobile'),
                    'User_Defualt_Image' => __('User Defualt Image'),
                    'User_Defualt_Cover' => __('User Defualt Cover'),
                ])
                ->sortable()
                ->rules('required', 'max:255'),

            Select::make(__('type'), 'type')
                ->options([
                    '0' => __('description'),
                    '1' => __('image'),
                    '2' => __('color'),
                    '3' => __('Text'),
                    '4' => __('link'),
                ])
                ->displayUsingLabels()
                ->creationRules('required', 'numeric')
                ->updateRules('nullable', 'numeric'),

            NovaDependencyContainer::make([
                Trix::make(__('value'), 'value')
                    ->rules('required'),
            ])->dependsOn('type', 0),


            NovaDependencyContainer::make([
                Color::make(__('value'), 'value')
                    ->chrome()
            ])->dependsOn('type', '2'),

            NovaDependencyContainer::make([
                Text::make(__('value'), 'value')
                    ->rules('required')
                    ->help('Includes the full url with https://'),
            ])->dependsOn('type', '4'),

            NovaDependencyContainer::make([
                Text::make(__('value'), 'value')
                    ->rules('required')
            ])->dependsOn('type', '3'),

            NovaDependencyContainer::make([
                Image::make(__('value'), 'value')
                    ->maxWidth('100')
                    ->rules('required'),
            ])->dependsOn('type', '1'),

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
