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
        	'site_name' => "Aditia Blog",
        	'address'	=> "Rawa Jaya st, East Jakarta",
        	'contact_number'	=> '087885297454',
        	'contact_email'	=> 'aditiaaadicka@gmail.com'

        ]);
    }
}
