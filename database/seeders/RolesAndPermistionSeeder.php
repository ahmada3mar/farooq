<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;

class RolesAndPermistionSeeder extends Seeder
{
/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $collection = collect([
            User::class,
            Role::class,
            Permission::class,
            // ... // List all your Models you want to have Permissions for.
        ]);

        $adminEmail = env('NOVA_PERMISSION_ADMIN_EMAIL', 'ahmad@admin.com');

        if (is_null($adminEmail)) {
            throw new \InvalidArgumentException('Email parameter must be provided!');
        }

        $collection->each(function ($item, $key) {
            // create permissions for each collection item
            $group = $this->getGroupName($item);
            $permission = $this->getPermissionName($item);

              Permission::updateOrCreate([

                    'name' =>  'view ' . $permission ,
                    ]);
                    Permission::updateOrCreate([

                        'name' =>  'create '  . $permission,
                    ]);
                    Permission::updateOrCreate([

                        'name' =>  'update '  . $permission,
                    ]);
                    Permission::updateOrCreate([

                        'name' =>  'delete '  . $permission,
                    ]);
                    Permission::updateOrCreate([

                        'name' =>  'destroy '  . $permission,
                    ]);
                    Permission::updateOrCreate([

                        'name' =>  'restore '  . $permission,
                    ]);
        });

        // Create an Admin Role and assign all Permissions
        $role = Role::updateOrCreate(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

       // Give User Admin Role
         $user = User::whereEmail($adminEmail)->first(); // Change this to your email.
         $user->assignRole('admin');
    }

    /**
     * Get group name based on the model class provided
     *
     * @param $class
     *
     * @return string
     */
    private function getGroupName($class)
    {
        return Str::plural(Str::title(Str::snake(class_basename($class), ' ')));
    }

    /**
     * Get permission name based on the model class provided
     *
     * @param $class
     *
     * @return string
     */
    private function getPermissionName($class)
    {
        return Str::plural(Str::snake(class_basename($class), ' '));
    }
}
