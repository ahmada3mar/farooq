<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class SellPoint extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\SellPoint::class;

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
    public static $group = 'settings';

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

            Avatar::make('image' , 'image')->maxWidth(50),


            Text::make('name')
            ->sortable()
            ->creationRules('required', 'max:255')
            ->updateRules('required', 'max:255'),
            
            Select::make(__('city'), 'city')
            ->options([
                'Irbid' => 'إربد',
                'Mafraq' => 'المفرق',
                'Ajlun' => 'عجلون',
                'Jerash' => 'جرش',
                'Amman' => 'عمان',
                'Zarqa' => 'الزرقاء',
                'As-Salt' => 'السلط',
                'Madaba' => 'مأدبا',
                'Tafilah' => 'الطفيلة',
                'Karak' => 'الكرك',
                'Ma\'an' => 'معان',
                'Aqaba' => 'العقبة',
                
                ])
                ->creationRules('required')
                ->sortable()
                ->updateRules('required'),
                
                Text::make('Address')
                ->creationRules('nullable', 'max:255')
                ->updateRules('nullable', 'max:255'),

                Text::make(__('location'), 'url')
                ->creationRules('nullable', 'max:255')
                ->updateRules('nullable', 'max:255'),

                Text::make('mobile')
                ->creationRules('nullable', 'max:255')
                ->updateRules('nullable', 'max:255'),

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
