<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use DB;
class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Hot Tea',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 3,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Iced Tea',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 3,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Tea Latte',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Chai Latte',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Matcha',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4.75,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Espresso',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 2.5,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Americano ',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 3.5,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Latte',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Iced Latte ',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Mocha',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4.25,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Drip',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 2,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Pour Over',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 3.5,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Affogato',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4.5,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Cold Brew',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Hot Chocolate',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 3,
            'category_id' => 3,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Bottled Drink',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 2,
            'category_id' => 3,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Juice',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 1.5,
            'category_id' => 3,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Muffin',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 2,
            'category_id' => 3,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The Baloo',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The Black Bear',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The Brown Bear',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The Grizzly',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The Sunbear',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Shot',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 1,
            'category_id' => 5,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Syrup',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => .5,
            'category_id' => 5,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Alt. Milk',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => .5,
            'category_id' => 5,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Mug',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 10,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Stickers',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 2,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Hat',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 18,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Shirt',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 20,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Sweatshirt',
            'description' => '',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 30,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
