<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use DB;
class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url' => "https://www.facebook.com/bearcavecoffeetx/",
            'twitter_url' => "https://twitter.com/bearcavecoffeetx",
            'instagram_url' => "https://www.instagram.com/bearcavecoffee/",
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
