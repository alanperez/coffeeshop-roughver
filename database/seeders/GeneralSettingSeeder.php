<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use DB;
class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Bear Cave Coffee',
            'logo_image_url' => '/img/logo-black.png',
            'address_1' => '214 Hwy 352',
            'address_2' => '',
            'city' => 'Mesquite',
            'state' => 'TX',
            'zipcode' => '75149',
            'phone_number' => '(469) 594-2511',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
