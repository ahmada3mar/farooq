<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use \Epartment\NovaDependencyContainer\NovaDependencyContainer ;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;

class Answer extends ResourceForUser
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Answer::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    public static $displayInNavigation = false;



    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('answer');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('answer');
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

        return $query->whereHas('question',function($qa) use($user){
        return $qa->whereHas('lecutre',function($l) use($user){
            return $l -> whereHas('course', function($c) use($user){
                return $c->where("user_id" , $user->id);
            });
        } );
        } );
    }


    public function fields(Request $request)
    {
        return [
            ID::make()->hideFromIndex(),

            BelongsTo::make( __('question') , 'question' , Question::class),

            Text::make(__('name'), 'name')
                ->sortable()
                ->rules('required', 'max:255'),
            Boolean::make(__('is_correct'), 'is_correct')


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
