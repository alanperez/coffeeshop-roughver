<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use DB;
class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'Coffee',
            'description' => '',
            'image_url' => '/img/coffee-img.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Tea',
            'description' => '',
            'image_url' => '/img/tea.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Not Coffee',
            'description' => '',
            'image_url' => '/img/hotchoc.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Specialty ',
            'description' => '',
            'image_url' => '/img/logo-black.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Extras',
            'description' => '',
            'image_url' => '/img/milk.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Merch',
            'description' => '',
            'image_url' => '/img/merch.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);

    }
}
