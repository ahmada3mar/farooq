<?php

namespace App\Nova;

use Farooq\Checkboxes\Checkboxes;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphToMany;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Nova;
use Spatie\Permission\Models\Permission;
use Vyuldashev\NovaPermission\Role as DefaultRole;

class Role extends DefaultRole
{
    public static $model = \App\Models\Role::class;

    public function fields(Request $request)
    {

        $guardOptions = collect(config('auth.guards'))->mapWithKeys(function ($value, $key) {
            return [$key => $key];
        });

        $userResource = Nova::resourceForModel(getModelForGuard($this->guard_name));

        return [
            ID::make()->sortable(),

            Text::make(__('nova-permission-tool::roles.name'), 'name')
                ->rules(['required', 'string', 'max:255'])
                ->creationRules('unique:' . config('permission.table_names.roles'))
                ->updateRules('unique:' . config('permission.table_names.roles') . ',name,{{resourceId}}'),

            Select::make(__('nova-permission-tool::roles.guard_name'), 'guard_name')
                ->options($guardOptions->toArray())
                ->rules(['required', Rule::in($guardOptions)]),

            DateTime::make(__('nova-permission-tool::roles.created_at'), 'created_at')->exceptOnForms(),
            DateTime::make(__('nova-permission-tool::roles.updated_at'), 'updated_at')->exceptOnForms(),

            Checkboxes::make(__('Permissions'), 'prepared_permissions')->withGroups()->options(Permission::all()->map(function ($permission, $key) {
                return [
                    'group'  => __(ucfirst($permission->group)),
                    'option' => $permission->name,
                    'label'  => __($permission->name),
                ];
            })->groupBy('group')->toArray()),
            MorphToMany::make($userResource::label(), 'users', $userResource)
                ->searchable()
                ->singularLabel($userResource::singularLabel()),
        ];
    }
}
