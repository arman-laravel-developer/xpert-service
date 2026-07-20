<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BrandSeeder extends Seeder
{
    public function run()
    {
        DB::table('brands')->insert([
            ['name' => 'Samsung', 'slug' => 'samsung', 'image' => 'front/images/brands/samsung.png', 'description' => 'Samsung home appliances repair and service', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LG', 'slug' => 'lg', 'image' => 'front/images/brands/lg.png', 'description' => 'LG appliances repair and service', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'General', 'slug' => 'general', 'image' => 'front/images/brands/general.png', 'description' => 'General brand appliances service', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Panasonic', 'slug' => 'panasonic', 'image' => 'front/images/brands/panasonic.png', 'description' => 'Panasonic home appliances service', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sharp', 'slug' => 'sharp', 'image' => 'front/images/brands/sharp.png', 'description' => 'Sharp appliances repair', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Whirlpool', 'slug' => 'whirlpool', 'image' => 'front/images/brands/whirlpool.png', 'description' => 'Whirlpool appliances service', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mitsubishi', 'slug' => 'mitsubishi', 'image' => 'front/images/brands/mitsubishi.png', 'description' => 'Mitsubishi AC and appliances service', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Daikin', 'slug' => 'daikin', 'image' => 'front/images/brands/daikin.png', 'description' => 'Daikin AC repair and service', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Toshiba', 'slug' => 'toshiba', 'image' => 'front/images/brands/toshiba.png', 'description' => 'Toshiba appliances repair', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hitachi', 'slug' => 'hitachi', 'image' => 'front/images/brands/hitachi.png', 'description' => 'Hitachi AC and appliances service', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Midea', 'slug' => 'midea', 'image' => 'front/images/brands/midea.png', 'description' => 'Midea AC and appliances service', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gree', 'slug' => 'gree', 'image' => 'front/images/brands/gree.png', 'description' => 'Gree AC repair and service', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
