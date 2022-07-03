<?php

namespace App\Nova;

use App\Models\Course;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use \Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Farooq\UnitPicker\UnitPicker;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Lecture extends ResourceForUser
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Lecture::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';
    // public static $viaRelationship = 'question';

    public static $group = 'Courses & Lectures';


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
    public static function relation($query  , $request){
        // dd($query)
        $user = $request->user();

        return $query->whereHas('course',function($q) use($user){
            return $q -> where('user_id', $user->id);
        } );

    }


    public static function relatableUsers(NovaRequest $request, $query)
    {
        // dd($query);
        return $query->Role('instructor');
    }

    public function getCourses($request){
        $user = $request->user();

        if($user->isSuperAdmin()){
            return Course::take(5)->get();
        }


        return Course::where('user_id', $user->id)->take(5)->get();

    }

    public function fields(Request $request)
    {

        return [

            ID::make()->hideFromIndex(),


            Text::make(__('name'), 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            UnitPicker::make('course')->setReq($request)->value($this->course)->options($this->getCourses($request)),

            UnitPicker::make('unit')->setReq($request)->value($this->unit)->dependsOn('course'),


            Number::make(__('order'), 'order')
                ->creationRules('required', 'numeric', 'min:1')
                ->updateRules('nullable', 'numeric', 'min:1'),

            Select::make(__('type'), 'type')
                ->options([
                    '0' => __('video'),
                    '1' => __('question'),
                ])
                ->displayUsingLabels()
                ->creationRules('required', 'numeric')
                ->updateRules('nullable', 'numeric'),

            NovaDependencyContainer::make([
                Text::make(__('url') , 'url', function () {
                    return $this->getRawOriginal('url');
                })
                    ->rules('required'),
            ])->dependsOn('type', 0),

            HasMany::make('question', 'question', Question::class),

            Boolean::make('Private', 'is_private')
                ->trueValue('1')
                ->falseValue('0'),

            HasMany::make(__('Attachments'), 'attachment', Attachment::class)->nullable(),

            Trix::make(__('description'), 'description')
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
