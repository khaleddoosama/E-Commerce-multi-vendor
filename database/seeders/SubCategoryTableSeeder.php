<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('sub_categories')->insert([
            'category_id' => 1,
            'subcategory_name'=>'manware',
            'subcategory_slug'=>'manware',
         ]);
            DB::table('sub_categories')->insert([
                'category_id' => 1,
                'subcategory_name'=>'womanware',
                'subcategory_slug'=>'womanware',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 1,
                'subcategory_name'=>'kidware',
                'subcategory_slug'=>'kidware',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 2,
                'subcategory_name'=>'manphone',
                'subcategory_slug'=>'manphone',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 2,
                'subcategory_name'=>'womanphone',
                'subcategory_slug'=>'womanphone',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 2,
                'subcategory_name'=>'kidphone',
                'subcategory_slug'=>'kidphone',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 3,
                'subcategory_name'=>'mantablet',
                'subcategory_slug'=>'mantablet',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 3,
                'subcategory_name'=>'womantablet',
                'subcategory_slug'=>'womantablet',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 3,
                'subcategory_name'=>'kidtablet',
                'subcategory_slug'=>'kidtablet',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 4,
                'subcategory_name'=>'manlaptop',
                'subcategory_slug'=>'manlaptop',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 4,
                'subcategory_name'=>'womanlaptop',
                'subcategory_slug'=>'womanlaptop',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 4,
                'subcategory_name'=>'kidlaptop',
                'subcategory_slug'=>'kidlaptop',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 5,
                'subcategory_name'=>'mansmartwatch',
                'subcategory_slug'=>'mansmartwatch',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 5,
                'subcategory_name'=>'womansmartwatch',
                'subcategory_slug'=>'womansmartwatch',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 5,
                'subcategory_name'=>'kidsmartwatch',
                'subcategory_slug'=>'kidsmartwatch',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 6,
                'subcategory_name'=>'manheadphone',
                'subcategory_slug'=>'manheadphone',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 6,
                'subcategory_name'=>'womanheadphone',
                'subcategory_slug'=>'womanheadphone',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 6,
                'subcategory_name'=>'kidheadphone',
                'subcategory_slug'=>'kidheadphone',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 7,
                'subcategory_name'=>'manpowerbank',
                'subcategory_slug'=>'manpowerbank',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 7,
                'subcategory_name'=>'womanpowerbank',
                'subcategory_slug'=>'womanpowerbank',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 7,
                'subcategory_name'=>'kidpowerbank',
                'subcategory_slug'=>'kidpowerbank',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 8,
                'subcategory_name'=>'manmemorycard',
                'subcategory_slug'=>'manmemorycard',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 8,
                'subcategory_name'=>'womanmemorycard',
                'subcategory_slug'=>'womanmemorycard',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 8,
                'subcategory_name'=>'kidmemorycard',
                'subcategory_slug'=>'kidmemorycard',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 9,
                'subcategory_name'=>'mancharger',
                'subcategory_slug'=>'mancharger',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 9,
                'subcategory_name'=>'womancharger',
                'subcategory_slug'=>'womancharger',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 9,
                'subcategory_name'=>'kidcharger',
                'subcategory_slug'=>'kidcharger',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 10,
                'subcategory_name'=>'manearphone',
                'subcategory_slug'=>'manearphone',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 10,
                'subcategory_name'=>'womanearphone',
                'subcategory_slug'=>'womanearphone',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 10,
                'subcategory_name'=>'kidearphone',
                'subcategory_slug'=>'kidearphone',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 11,
                'subcategory_name'=>'manusb',
                'subcategory_slug'=>'manusb',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 11,
                'subcategory_name'=>'womanusb',
                'subcategory_slug'=>'womanusb',
            ]);
            DB::table('sub_categories')->insert([
                'category_id' => 11,
                'subcategory_name'=>'kidusb',
                'subcategory_slug'=>'kidusb',
            ]);
            
    }
}
