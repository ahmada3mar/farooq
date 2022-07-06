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

        $config = SiteConfig::all();

        if(count($config) == 0 ) {

            SiteConfig::firstOrCreate(
                [
                'key' => 'home_shadow',

                ],
                [
                'value' => '#fff',
                'type' => '2'
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
    }

    $sections = Section::orderBy('Order')->get();
    if(count($sections) == 0) {

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
}
