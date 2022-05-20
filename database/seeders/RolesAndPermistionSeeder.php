<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Attachment;
use App\Models\Course;
use App\Models\Document;
use App\Models\Lecture;
use App\Models\Question;
use App\Models\Section;
use App\Models\SiteConfig;
use App\Models\Unit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;
use App\Models\UserInformation;

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
            Question::class,
            Answer::class,
            Course::class,
            Lecture::class,
            Unit::class,
            SiteConfig::class,
            Section::class,
            UserInformation::class,
            Attachment::class,
            Document::class,
            // ... // List all your Models you want to have Permissions for.
        ]);

        $adminEmail = env('NOVA_PERMISSION_ADMIN_EMAIL', 'admin@admin.com');

        if (is_null($adminEmail)) {
            throw new \InvalidArgumentException('Email parameter must be provided!');
        }

        $collection->each(function ($item, $key) {
            // create permissions for each collection item
            $group = $this->getGroupName($item);
            $permission = $this->getPermissionName($item);

            Permission::updateOrCreate([

                'name' =>  'view ' . $permission,
                'group' => $permission
            ]);
            Permission::updateOrCreate([

                'name' =>  'create '  . $permission,
                'group' => $permission

            ]);
            Permission::updateOrCreate([

                'name' =>  'update '  . $permission,
                'group' => $permission

            ]);
            Permission::updateOrCreate([

                'name' =>  'delete '  . $permission,
                'group' => $permission

            ]);
            Permission::updateOrCreate([

                'name' =>  'destroy '  . $permission,
                'group' => $permission

            ]);
            Permission::updateOrCreate([

                'name' =>  'restore '  . $permission,
                'group' => $permission

            ]);

            Permission::updateOrCreate([

                'name' =>  'view own '  . $permission,
                'group' => $permission

            ]);
        });


        // Create an Admin Role and assign all Permissions
        Role::updateOrCreate(['name' => 'instructor'])
        ->givePermissionTo(Permission::updateOrCreate(['name' => 'access admin panel' , 'group' => 'admin dashboard']));
        Role::updateOrCreate(['name' => 'user']);
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
