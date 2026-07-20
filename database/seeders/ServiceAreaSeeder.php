<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ServiceAreaSeeder extends Seeder
{
    public function run()
    {
        DB::table('service_areas')->insert([
            ['name' => 'মিরপুর-১', 'slug' => 'mirpur-1', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'মিরপুর-২', 'slug' => 'mirpur-2', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'মিরপুর-৬', 'slug' => 'mirpur-6', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'মিরপুর-১০', 'slug' => 'mirpur-10', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'পল্লবী', 'slug' => 'pallabi', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'রূপনগর', 'slug' => 'rupnagar', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'কাজীপাড়া', 'slug' => 'kazipara', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'শেওড়াপাড়া', 'slug' => 'shewrapara', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'আগারগাঁও', 'slug' => 'agargaon', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'শেরেবাংলা নগর', 'slug' => 'sher-e-bangla-nagar', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ধানমন্ডি', 'slug' => 'dhanmondi', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'কল্যাণপুর', 'slug' => 'kallyanpur', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'শ্যামলী', 'slug' => 'shyamoli', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'আদাবর', 'slug' => 'adabor', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'মোহাম্মদপুর', 'slug' => 'mohammadpur', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'বসুন্ধরা', 'slug' => 'bashundhara', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'বাড্ডা', 'slug' => 'badda', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'উত্তরা', 'slug' => 'uttara', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'বনানী', 'slug' => 'banani', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'গুলশান', 'slug' => 'gulshan', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
