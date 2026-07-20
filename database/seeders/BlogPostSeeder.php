<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BlogPostSeeder extends Seeder
{
    public function run()
    {
        DB::table('blog_posts')->insert([
            [
                'title' => 'এসি সার্ভিসিং টিপস: আপনার AC এর আয়ু বাড়ান',
                'slug' => 'ac-servicing-tips',
                'content' => '<h3>নিয়মিত এসি সার্ভিসিং কেন জরুরি?</h3><p>গ্রীষ্মকালে এসি আমাদের জীবনের অপরিহার্য অংশ হয়ে দাঁড়ায়। কিন্তু নিয়মিত সার্ভিসিং না করালে এসির কার্যক্ষমতা কমে যায় এবং বিদ্যুৎ খরচ বেড়ে যায়।</p><h4>এসি সার্ভিসিং টিপস:</h4><ul><li>প্রতি মাসে ফিল্টার পরিষ্কার করুন</li><li>বছরে অন্তত একবার পেশাদার সার্ভিসিং করান</li><li>থার্মোস্ট্যাট সঠিক তাপমাত্রায় সেট করুন</li><li>আউটডোর ইউনিটের চারপাশ পরিষ্কার রাখুন</li></ul><p>নিয়মিত সার্ভিসিং করালে এসির আয়ু বাড়ে এবং কুলিং পারফরম্যান্স ভালো থাকে।</p>',
                'image' => 'front/images/blog/ac-servicing.jpg',
                'category' => 'AC Tips',
                'author' => 'Xpert Service BD',
                'published_date' => '2024-12-01',
                'meta_title' => 'AC Servicing Tips - Increase AC Lifespan | Xpert Service BD',
                'meta_description' => 'Learn how to increase your AC lifespan with regular servicing. Professional AC servicing tips for better cooling and lower electricity bills.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ফ্রিজ যত্ন টিপস: সঠিক ব্যবহার ও রক্ষণাবেক্ষণ',
                'slug' => 'fridge-care-tips',
                'content' => '<h3>ফ্রিজের সঠিক যত্ন নিন</h3><p>ফ্রিজ আমাদের দৈনন্দিন জীবনের গুরুত্বপূর্ণ একটি যন্ত্র। সঠিক রক্ষণাবেক্ষণ ফ্রিজের আয়ু বাড়ায় এবং খাবার তাজা রাখে।</p><h4>ফ্রিজ রক্ষণাবেক্ষণ টিপস:</h4><ul><li>ওভারলোডিং এড়িয়ে চলুন</li><li>নিয়মিত ডিফ্রস্ট করুন (নন-ফ্রস্ট ছাড়া)</li><li>ডোর সিল ঠিক আছে কিনা চেক করুন</li><li>কনডেন্সার কয়েল পরিষ্কার রাখুন</li><li>সঠিক তাপমাত্রা সেট করুন (৩-৫°C)</li></ul><p>এই টিপসগুলো মেনে চললে আপনার ফ্রিজ দীর্ঘদিন ভালো থাকবে।</p>',
                'image' => 'front/images/blog/fridge-care.jpg',
                'category' => 'Fridge Care',
                'author' => 'Xpert Service BD',
                'published_date' => '2024-11-15',
                'meta_title' => 'Fridge Care Tips - Proper Maintenance Guide | Xpert Service BD',
                'meta_description' => 'Learn how to properly maintain your refrigerator. Tips for increasing fridge lifespan, energy saving and food preservation.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ওয়াশিং মেশিন ব্যবহারের সঠিক নিয়ম',
                'slug' => 'washing-machine-tips',
                'content' => '<h3>ওয়াশিং মেশিন সঠিকভাবে ব্যবহার করুন</h3><p>ওয়াশিং মেশিন ব্যবহারে কিছু সঠিক নিয়ম অনুসরণ করলে মেশিন দীর্ঘদিন ভালো থাকে এবং কাপড় পরিষ্কার হয়।</p><h4>ওয়াশিং মেশিন টিপস:</h4><ul><li>কাপড়ের লেবেল অনুযায়ী ওয়াশ সাইকেল নির্বাচন করুন</li><li>ডিটারজেন্টের সঠিক পরিমাণ ব্যবহার করুন</li><li>প্রতি মাসে ড্রাম ক্লিনিং করুন</li><li>ফিল্টার নিয়মিত পরিষ্কার করুন</li><li>ওভারলোড করবেন না</li></ul><p>সঠিক ব্যবহার ও নিয়মিত রক্ষণাবেক্ষণ ওয়াশিং মেশিনের আয়ু বাড়ায়।</p>',
                'image' => 'front/images/blog/washing-machine.jpg',
                'category' => 'Washing Machine',
                'author' => 'Xpert Service BD',
                'published_date' => '2024-10-20',
                'meta_title' => 'Washing Machine Usage Tips - Proper Maintenance | Xpert Service BD',
                'meta_description' => 'Learn proper washing machine usage tips. How to maintain your washing machine for longer life and better cleaning performance.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
