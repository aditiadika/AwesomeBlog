<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Setting::create([
        	'site_name' => "Saham Profit",
        	'address'	=> "Unknown st, East Jakarta",
        	'contact_number'	=> '08123128932',
        	'contact_email'	=> 'sahamprofit@gmail.com'
        ]);
    }
}
