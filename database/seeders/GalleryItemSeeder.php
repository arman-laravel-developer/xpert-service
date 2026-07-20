<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GalleryItemSeeder extends Seeder
{
    public function run()
    {
        DB::table('gallery_items')->insert([
            ['image' => 'front/images/gallery/gallery-1.jpg', 'alt_text' => 'AC Repair Service', 'category' => 'AC Repair', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['image' => 'front/images/gallery/gallery-2.jpg', 'alt_text' => 'AC Installation', 'category' => 'AC Installation', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['image' => 'front/images/gallery/gallery-3.jpg', 'alt_text' => 'Washing Machine Repair', 'category' => 'Washing Machine', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['image' => 'front/images/gallery/gallery-4.jpg', 'alt_text' => 'Fridge Repair Service', 'category' => 'Refrigerator', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['image' => 'front/images/gallery/gallery-5.jpg', 'alt_text' => 'AC Gas Refill', 'category' => 'AC Gas Refill', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['image' => 'front/images/gallery/gallery-6.jpg', 'alt_text' => 'Microwave Repair', 'category' => 'Microwave', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['image' => 'front/images/gallery/gallery-7.jpg', 'alt_text' => 'AC Servicing', 'category' => 'AC Servicing', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['image' => 'front/images/gallery/gallery-8.jpg', 'alt_text' => 'Dishwasher Repair', 'category' => 'Dishwasher', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
