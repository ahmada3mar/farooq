<?php

namespace Farooq\UnitPicker\Http\Controllers;

use App\Models\Course;
use App\Models\DocumentCourse;
use App\Models\Section;
use App\Models\Unit;
use Illuminate\Routing\Controller;
use Laravel\Nova\Http\Requests\NovaRequest;
use Farooq\UnitPicker\UnitPicker;

class FieldController extends Controller
{

    public function course(NovaRequest $request){
        $query =  Course::query();
        $user = $request->user();

        if (!$user->isSuperAdmin() && $user->hasPermissionTo('view own courses')) {
            $query->where("user_id" , $user->id);
        }

        return $query->where('name' ,'like', '%' . $request['name'] . '%')->get();

    }
    public function index(NovaRequest $request)
    {
        // dd($request->all());


        if (is_null($request->viaResourceId)) {
            abort(500, 'depend On Relationship not found on the Resource spefified for the Field "' . $request->attribute . '" Please check you have set correct /App/Nova/Resource');
        }

        // dd($request->all());
        // $request['resourceName'] = 'course';
        // $request['viaRelationship'] = 'course';
        // $request['viaResource'] = 'viaResource';
        // $request['keyName'] = 'id';
        // dd($request->all());
        $resource = new $request->resourceClass($request->resourceClass::newModel());
        // dd($resource->fields($request));

        // Create Nested Array Fields from Panels and Tabs, Flatten and find
        $fields = collect($resource->fields($request))->map(function ($field) {
            if ($field instanceof \Laravel\Nova\Panel || \get_class($field) === 'Arsenaltech\NovaTab\NovaTab') {
                return collect($field->data);
            }
            return $field;
        })->flatten();

        $field = $fields->first(function ($value, $key) use ($request) {
            return ($value instanceof UnitPicker && $value->attribute == $request->attribute);
        });

        if (is_null($field)) {
            abort(500, 'Can not find the Field "' . $request->attribute . '" in the Model "' . $request->resourceClass . '"');
        }

        $modelClass = $request->modelClass ;

        $model = $modelClass::find($request->viaResourceId);

        if (is_null($model)) {
            abort(500, 'Can not find the Model "' . $request->modelClass . '::find(' . $request->viaResourceId . ')');
        }

        $user = $request->user();
        if($request->resourceClass ==  "App\Nova\Lecture"){

            $query =  Unit::query();

            if (!$user->isSuperAdmin() && $user->hasPermissionTo('view own lectures')) {
                $query->whereHas("course" , function($c) use($user) {
                    return $c->where("user_id" , $user->id);
                });
            }
            return $query->where("course_id" , $model->id)->get(['id','name']);
        }else{
            return $model->documentCourses()->get(['id','name']);
        }
    }
}
