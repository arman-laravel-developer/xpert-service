<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'name' => 'রফিকুল ইসলাম',
                'location' => 'মিরপুর-১, ঢাকা',
                'rating' => 5,
                'content' => 'গত মাসে আমাদের বাসায় এসির সার্ভিসিং করিয়েছি। টেকনিশিয়ান খুবই এক্সপার্ট এবং সময়মতো এসেছিল। কাজের কোয়ালিটি অসাধারণ। দামও যুক্তিযুক্ত। সবাইকে রেকমেন্ড করব।',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'শামীমা আক্তার',
                'location' => 'পল্লবী, ঢাকা',
                'rating' => 5,
                'content' => 'ওয়াশিং মেশিনের সমস্যা নিয়ে কল করেছিলাম। খুব দ্রুত সার্ভিস দিয়েছে। মেশিন এখন আগের চেয়ে ভালো কাজ করছে। থ্যাঙ্ক ইউ Xpert Service BD টিম।',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'নাজমুল হাসান',
                'location' => 'ধানমন্ডি, ঢাকা',
                'rating' => 4,
                'content' => 'ফ্রিজের গ্যাস রিফিল করিয়েছি। সার্ভিস খুব ভালো ছিল। শুধু একটু দেরি করেছিল, কিন্তু কাজের কোয়ালিটি দেখে সন্তুষ্ট। মূল্যেও সাশ্রয়ী।',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
