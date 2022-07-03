<?php

namespace Farooq\UnitPicker;

use App\Models\Course;
use App\Models\Unit as ModelsUnit;
use App\Nova\Unit;
use Laravel\Nova\Nova;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ResourceRelationshipGuesser;
use Laravel\Nova\Fields\FormatsRelatableDisplayValues;
use Laravel\Nova\Http\Requests\NovaRequest;

class UnitPicker extends BelongsTo
{
    use FormatsRelatableDisplayValues;

    public $resourceParentClass;

    public $modelClass;
    public $modelPrimaryKey;
    public $foreignKeyName;

    public $valueKey;

    public $titleKey;

    public $dependKey;
    public $dependsOn;
    public $editMode;
    public $viaResource;
    public $viaResourceId;
    public $viaRelationship;
    public $course;
    public $unit;
    public $valueObject;


    public $optionResolveCallback = null;
    public $calledFromClass = null;
    public $options = [];

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'unit-picker';

    public function __construct($name, $attribute = null, $resource = null)
    {
        $resource = $resource ?? ResourceRelationshipGuesser::guessResource($name);
        parent::__construct($name, $attribute, $resource);

        $this->modelClass = get_class($resource::newModel());
        $this->modelPrimaryKey = $resource::newModel()->getKeyName();
        $this->titleKey = $resource::$title;
        $this->optionResolveCallback = function () {
            return [];
        };
    }

    public function options($options)
    {
        $this->options = collect($options);
        return $this;
    }

    public function value($value)
    {
        $this->valueObject = $value;
        return $this;
    }

    public function optionsResolve($callback)
    {
        $this->optionResolveCallback = function ($course) {
            // Reduce the amount of unnecessary data sent
            return $course->units()->get(['id','name']);

        };
        // dd($this);
        return $this;
    }

    public function dependsOn($relationship)
    {
        $this->dependsOn = Str::lower($relationship);
        return $this;
    }

    public function setReq(NovaRequest $req)
    {

        // dd($this->valueKey);
        if( $req['viaResource'] && $req['viaResourceId'] && $req['viaRelationship'] == 'lectures' ){
            $unit = ModelsUnit::find($req['viaResourceId']);
            $this->options = collect([]);
            $this->unit = $unit;
            $this->course = $unit->course;
        }

        $this->editMode = $req['editMode'] ?? '';
        $this->viaResource = $req['viaResource'] ?? '';
        $this->viaResourceId = $req['viaResourceId'] ?? '';
        $this->viaRelationship = $req['viaRelationship'] ?? '';

        return $this;
    }

    public function resolve($resource, $attribute = null)
    {
        parent::resolve($resource, $attribute);
        $this->resourceParentClass = get_class(Nova::newResourceFromModel($resource));


        $foreign = $resource->{$this->attribute}();
        $this->foreignKeyName = $foreign->getForeignKeyName();

        if ($this->dependsOn) {
            $this->dependKey = $resource->{$this->dependsOn}()->getForeignKeyName();
        }

        $value = $resource->{$this->attribute}()->withoutGlobalScopes()->first();
        if ($value) {
            $this->valueKey = $value->getKey();
            $this->value = $this->formatDisplayValue($value);
        }
    }

    public function meta()
    {

        $this->meta = parent::meta();
        return array_merge([
            'options' => $this->foreignKeyName == "unit_id" ? ModelsUnit::where("course_id" , $this->valueObject->course_id ?? null )->get() : $this->options,
            'valueKey' => $this->valueKey,
            'dependKey' => $this->dependKey,
            'dependsOn' => $this->dependsOn,
            'titleKey' => $this->titleKey,
            'resourceParentClass' => $this->resourceParentClass,
            'modelClass' => $this->modelClass,
            'modelPrimaryKey' => $this->modelPrimaryKey,
            'foreignKeyName' => $this->foreignKeyName,
            'calledFromClass' => $this->calledFromClass,
            'editMode' =>  $this->editMode,
            'editing' => \false,
            'viaResource' =>         $this->viaResource,
            'viaResourceId' =>         $this->viaResourceId,
            'viaRelationship' =>         $this->viaRelationship,
            'course' =>         $this->course,
            'unit' =>         $this->unit,
            "valueObject" => $this->valueObject


        ], $this->meta);
    }
}
