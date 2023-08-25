<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seos')->insert([
            'meta_title' => 'easy multivendor online shop',
            'meta_author' => 'Khaled Osama',
            'meta_keyword' => 'best online shop, best tshirt, best shop',
            'meta_description' => 'Everyday Fresh & Clean With Our Products & Services',
        ]);
    }
}
