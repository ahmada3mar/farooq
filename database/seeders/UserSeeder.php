<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\SiteConfig;
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

        SiteConfig::updateOrCreate(
            [
            'key' => 'home_shadow',

            ],
            [
            'value' => '#fff',
            'type' => '2'
        ]
    );
        SiteConfig::updateOrCreate(
            [
            'key' => 'home_cover_image',

            ],
            [
            'value' => '',
            'type' => '1'
        ]
    );
        SiteConfig::updateOrCreate(
            [
            'key' => 'home_description',

            ],
            [
            'value' => "المنصة الأولى للتعليم الإلكتروني في المملكة <br> لجميع الصفوف و المراحل الدراسية",
            'type' => '0'
        ]
    );

    Section::updateOrCreate([
        'name'=> 'علمي'
    ]);
    Section::updateOrCreate([
        'name'=> 'أدبي'
    ]);
    Section::updateOrCreate([
        'name'=> 'مهني'
    ]);

    }
}
