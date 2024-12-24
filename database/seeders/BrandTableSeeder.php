<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // brand_image is a string, must be a path to an image file in the public folder of the project
        // brand_image is must begin wiht 'upload/brand/' . name of the image file

        DB::table('brands')->insert([
            'brand_name' => 'Apple',
            'brand_slug' => 'apple',
            'brand_image' => 'upload/brand/apple.png',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Samsung',
            'brand_slug' => 'samsung',
            'brand_image' => 'upload/brand/samsung.png',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Xiaomi',
            'brand_slug' => 'xiaomi',
            'brand_image' => 'upload/brand/xiaomi.png',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Huawei',
            'brand_slug' => 'huawei',
            'brand_image' => 'upload/brand/huawei.png',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Oppo',
            'brand_slug' => 'oppo',
            'brand_image' => 'upload/brand/oppo.png',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Vivo',
            'brand_slug' => 'vivo',
            'brand_image' => 'upload/brand/vivo.png',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Realme',
            'brand_slug' => 'realme',
            'brand_image' => 'upload/brand/realme.png',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Nokia',
            'brand_slug' => 'nokia',
            'brand_image' => 'upload/brand/nokia.webp',
        ]);
        // DB::table('brands')->insert([
        //     'brand_name' => 'Sony',
        //     'brand_slug' => 'sony',
        //     'brand_image' => 'upload/brand/sony.jpg',
        // ]);
        // DB::table('brands')->insert([
        //     'brand_name' => 'LG',
        //     'brand_slug' => 'lg',
        //     'brand_image' => 'upload/brand/lg.jpg',
        // ]);
        // DB::table('brands')->insert([
        //     'brand_name' => 'HTC',
        //     'brand_slug' => 'htc',
        //     'brand_image' => 'upload/brand/htc.jpg',
        // ]);
        // DB::table('brands')->insert([
        //     'brand_name' => 'Blackberry',
        //     'brand_slug' => 'blackberry',
        //     'brand_image' => 'upload/brand/blackberry.jpg',
        // ]);
        // DB::table('brands')->insert([
        //     'brand_name' => 'Asus',
        //     'brand_slug' => 'asus',
        //     'brand_image' => 'upload/brand/asus.jpg',
        // ]);
        // DB::table('brands')->insert([
        //     'brand_name' => 'Lenovo',
        //     'brand_slug' => 'lenovo',
        //     'brand_image' => 'upload/brand/lenovo.jpg',
        // ]);
        // DB::table('brands')->insert([
        //     'brand_name' => 'Motorola',
        //     'brand_slug' => 'motorola',
        //     'brand_image' => 'upload/brand/motorola.jpg',
        // ]);
        // DB::table('brands')->insert([
        //     'brand_name' => 'Meizu',
        //     'brand_slug' => 'meizu',
        //     'brand_image' => 'upload/brand/meizu.jpg',
        // ]);
        // DB::table('brands')->insert([
        //     'brand_name' => 'ZTE',
        //     'brand_slug' => 'zte',
        //     'brand_image' => 'upload/brand/zte.jpg',
        // ]);
    }
}
