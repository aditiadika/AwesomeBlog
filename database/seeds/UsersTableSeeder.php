<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $user = App\User::create([
        	'name'		=> 'admin',
        	'email' 	=> 'admin@yahoo.com',
        	'password'	=>  bcrypt('password'),
            'admin'     =>  1,
            'status'    =>  'Active',

        ]);

        App\Profile::create([
            'user_id'	=>  $user->id,
            'avatar'    =>  'uploads/avatars/1.jpeg',
            'about' 	=>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'facebook'	=>  'facebook.com',
            'youtube'   =>  'youtube.com',
            'tweeter'   =>  'twitter.com',
            'instagram' =>  'instagram'
        ]);
    }
}
