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
                'mobile' => '0777777777',
                'city'=>'amman',
                'area'=>'amman',
                'password' => bcrypt('123456')
            ]
        );

        SiteConfig::firstOrCreate(
            [
            'key' => 'home_cover_image',

            ],
            [
            'value' => '',
            'type' => '1'
        ]
    );
        SiteConfig::firstOrCreate(
            [
            'key' => 'home_description',

            ],
            [
            'value' => "المنصة الأولى للتعليم الإلكتروني في المملكة <br> لجميع الصفوف و المراحل الدراسية",
            'type' => '0'
        ]
    );

    Section::firstOrCreate([
        'name'=> 'علمي'
    ]);
    Section::firstOrCreate([
        'name'=> 'أدبي'
    ]);
    Section::firstOrCreate([
        'name'=> 'مهني'
    ]);

    }
}
