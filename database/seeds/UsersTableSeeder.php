<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Richard C Saavedra Coneo',
        	'email' => 'richardcmg7@gmail.com',
        	'password'  => bcrypt('43927913')
        ]);//
        User::create([
        	'name' => 'Oscar Enrique García Jimenez',
        	'email' => 'oscarenriquegarciajimenez@hotmail.com',
        	'password'  => bcrypt('123456789')
        ]);//
        User::create([
        	'name' => 'Usuario Admin',
        	'email' => 'admin@gmail.com',
        	'password'  => bcrypt('123123')
        	
        ]);//
    }
}