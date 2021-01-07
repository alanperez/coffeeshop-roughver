<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use DB;
class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "first local coffee shop in Mesquite, Texas.",
            'keywords' => "Coffee, Local Coffee, Coffee Near Me, Cafe Near Mee, coffee nearby",
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
