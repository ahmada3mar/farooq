<?php

namespace App\Nova;

use App\Models\Section;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Vyuldashev\NovaPermission\RoleSelect;


class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\User::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    public static function group(): string
    {
        return __('nova-permission-tool::navigation.sidebar-label');
    }

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('users');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('users');
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'email', 'description'
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
            ID::make()->sortable(),

            Avatar::make('Pictur' , 'avatar')->maxWidth(50),
            Image::make(__('cover'), 'cover')->maxWidth(50)->hideFromIndex(),


            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),
            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Number::make('class'),

            NovaDependencyContainer::make([
                Select::make('section' ,'section_id')->options(Section::pluck('name' , 'id'))->hideFromIndex(),
            ])->dependsOn('class', '11')->dependsOn('class' ,'12'),

            Text::make('Mobile')
            ->hideFromIndex()
                ->sortable()
                ->rules('required', 'max:254')
                ->creationRules('unique:users,mobile')
                ->updateRules('unique:users,mobile,{{resourceId}}'),
            Text::make('title')
                ->sortable()
                ->rules('required', 'max:255'),
            Place::make('City')
            ->hideFromIndex()
                ->sortable()
                ->rules( 'max:254'),

            Text::make('Area')
                ->sortable()
                ->hideFromIndex()
                ->rules( 'max:254'),

            Text::make('experience')
                ->sortable()
                ->rules( 'max:255'),
            Text::make('facebook')
                ->sortable()
                ->hideFromIndex()
                ->rules( 'max:255'),
            Text::make('twitter')
                ->sortable()
                ->hideFromIndex()
                ->rules( 'max:255'),
            Text::make('telegram')
                ->sortable()
                ->hideFromIndex()
                ->rules( 'max:255'),
            Trix::make( __('description'), 'description')
            ->hideFromIndex()
                ->rules('required'),


            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8'),
            RoleSelect::make('Role', 'roles'),


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
