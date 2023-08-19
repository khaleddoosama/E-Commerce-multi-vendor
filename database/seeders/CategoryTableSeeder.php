<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Fashion',
            'category_slug' => 'fashion',
            'category_image' => 'upload/category/cat-1.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Smartphone',
            'category_slug' => 'smartphone',
            'category_image' => 'upload/category/cat-2.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Tablet',
            'category_slug' => 'tablet',
            'category_image' => 'upload/category/cat-3.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Laptop',
            'category_slug' => 'laptop',
            'category_image' => 'upload/category/cat-4.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Smartwatch',
            'category_slug' => 'smartwatch',
            'category_image' => 'upload/category/cat-5.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Headphone',
            'category_slug' => 'headphone',
            'category_image' => 'upload/category/cat-6.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Charger',
            'category_slug' => 'charger',
            'category_image' => 'upload/category/cat-7.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Memory Card',
            'category_slug' => 'memory-card',
            'category_image' => 'upload/category/cat-8.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Power Bank',
            'category_slug' => 'power-bank',
            'category_image' => 'upload/category/cat-9.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Cable',
            'category_slug' => 'cable',
            'category_image' => 'upload/category/cat-10.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Case',
            'category_slug' => 'case',
            'category_image' => 'upload/category/cat-11.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Screen Protector',
            'category_slug' => 'screen-protector',
            'category_image' => 'upload/category/cat-12.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Earphone',
            'category_slug' => 'earphone',
            'category_image' => 'upload/category/cat-13.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Speaker',
            'category_slug' => 'speaker',
            'category_image' => 'upload/category/cat-14.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Camera',
            'category_slug' => 'camera',
            'category_image' => 'upload/category/cat-15.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Tripod',
            'category_slug' => 'tripod',
            'category_image' => 'upload/category/cat-16.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Microphone',
            'category_slug' => 'microphone',
            'category_image' => 'upload/category/cat-17.png',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Keyboard',
            'category_slug' => 'keyboard',
            'category_image' => 'upload/category/cat-18.png',
        ]);
    }
}
