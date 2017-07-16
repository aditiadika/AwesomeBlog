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
        	'name'		=> 'Dika Aditia',
        	'email' 	=> 'aditiadicka@yahoo.com',
        	'password'	=>  bcrypt('password'),
             'admin'    => 1

        ]);

        App\Profile::create([
            'user_id'	=> $user->id,
            'avatar'    => 'uploads/avatars/1.jpeg',
            'about' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'facebook'	=>  'facebook.com',
            'youtube'    => 'youtube.com'

        ]);
    }
}
