<?php

namespace Database\Seeders;
 
 use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use Illuminate\Database\QueryException ;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@test.com',  //when you want make seeder only without factory
        //     'password' => Hash::make('password'),
        // ]);

        User::factory()-> count(6)->hasposts(3)->create();
     
        
      
    }
}



