<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            [
                'email' => env('NOVA_PERMISSION_ADMIN_EMAIL' , 'admin@admin.com')
            ],
            [
                'name' => 'admin',
                'password' => bcrypt('123456')
            ]
        );
    }
}
