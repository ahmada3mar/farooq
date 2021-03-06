<?php

namespace App\Nova;

use App\Models\Section;
use App\Nova\Section as NovaSection;
use Carbon\Carbon;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Vyuldashev\NovaPermission\RoleSelect;
use Yassi\NestedForm\NestedForm;

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

            Avatar::make('Pictur', 'avatar')->maxWidth(50),
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

            BelongsTo::make( __('section'), 'section',NovaSection::class)
                ->rules('nullable')
                ->creationRules('nullable')
                ->updateRules('nullable'),

            Text::make('Mobile')
                ->hideFromIndex()
                ->sortable()
                ->rules('nullable', 'max:254')
                ->creationRules('nullable')
                ->updateRules('nullable'),
            Text::make('title')
                ->sortable()
                ->rules('nullable', 'max:255'),
            Place::make('City')
                ->hideFromIndex()
                ->sortable()
                ->rules('max:254'),

            Text::make('Area')
                ->sortable()
                ->hideFromIndex()
                ->rules('max:254'),

            Text::make('experience')
                ->sortable()
                ->rules('max:255'),
            Text::make('facebook')
                ->sortable()
                ->hideFromIndex()
                ->rules('max:255'),
            Text::make('twitter')
                ->sortable()
                ->hideFromIndex()
                ->rules('max:255'),
            Text::make('telegram')
                ->sortable()
                ->hideFromIndex()
                ->rules('max:255'),
            Trix::make(__('description'), 'description')
                ->hideFromIndex()
                ->creationRules('nullable', 'string')
                ->updateRules('nullable', 'string')
                ->rules('nullable'),


            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8'),
            RoleSelect::make('Role', 'roles')
            ->sortable(),

            Boolean::make('Active', 'active'),

            HasMany::make(__('UserCourses'), 'UserCourses', UserCourse::class)->nullable(),

        ];
    }

    protected static function fillFields(NovaRequest $request, $model, $fields)
    {
        $active = $request->active;

        $request->request->remove('active');

        $result = parent::fillFields($request, $model, $fields);

        if($active && !$model->active){
            $result[1][] = function () use ( $model) {
                $model->devices->delete();
            };
        }

        if(!$active && $model->active){
            $result[1][] = function () use ( $model) {
                $model->devices()->updateOrCreate([],['uuid'=>'expired' ,'expire_at' => Carbon::now()->subDays('10')->toDateString()]);
            };
        }
        return  $result;
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
