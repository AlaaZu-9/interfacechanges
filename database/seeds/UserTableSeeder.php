<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' =>'Aziiz',
            'email'=>'abulazizalhoimel@gmail.com',
            'password' => Hash::make('Admin'),
            'remember_token' =>str_random(12),
         ] );
         User::create([

            'name' =>'SEU',
            'email'=>'seu@seu.edu',
            'password' => Hash::make('Admin'),
            'remember_token' =>str_random(11),
         ] );


         User::create([

            'name' =>'Harvard',
            'email'=>'harvard@harvard.edu',
            'password' => Hash::make('Admin'),
            'remember_token' =>str_random(10),
         ] );
    }
}
