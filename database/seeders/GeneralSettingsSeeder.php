<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_name' => 'Laravel',
            'mobile' => '0123456789',
            'email' => 'info@laravel.com',
            'address' => '123 Laravel Street, Dhaka, Bangladesh',
            'header_logo' => 'header_logo.png',
            'footer_logo' => 'footer_logo.png',
            'favicon' => 'favicon.ico',
            'payment_method_image' => 'payment_methods.png',
            'about_us_short' => 'Welcome to Laravel Fashion Store, where fashion meets quality!',
            'facebook_url' => 'https://facebook.com/laravelstore',
            'instagram_url' => 'https://instagram.com/laravelstore',
            'youtube_url' => 'https://youtube.com/laravelstore',
            'twitter_url' => 'https://twitter.com/laravelstore',
            'pinterest_url' => 'https://pinterest.com/laravelstore',
            'linkedin_url' => 'https://linkedin.com/laravelstore',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
