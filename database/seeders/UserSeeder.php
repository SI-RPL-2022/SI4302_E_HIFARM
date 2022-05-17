<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'password'=> Hash::make('12345'),
               'role'=>'admin',
               'image'=>'noimg.jpg',
            ],
            [
               'name'=>'Dazzler',
               'email'=>'dazzlerind07@gmail.com',
               'password'=> Hash::make('fakhri123'),
               'role'=>'user',
               'image'=>'noimg.jpg',
            ],
            [
               'name'=>'Vendor1',
               'email'=>'vendor1@gmail.com',
               'password'=> Hash::make('vendor1'),
               'role'=>'vendor',
               'image'=>'noimg.jpg',
            ],
            [
               'name'=>'Vendor2',
               'email'=>'vendor2@gmail.com',
               'password'=> Hash::make('vendor2'),
               'role'=>'vendor',
               'image'=>'noimg.jpg',
            ],
            
        ]; 
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
