<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
      public function run(): void
    {
        DB::table('users')->insert(['name' => 'Kate Hutton', 'email' => 'k.l.hutton@hud.ac.uk', 'password' => Hash::make('password')]);
        DB::table('users')->insert(['name' => 'Yousef Miandad', 'email' => 'y.miandad@hud.ac.uk', 'password' => Hash::make('letmein')]);
        DB::table('users')->insert(['name' => 'Sunil Laxman', 'email' => 's.laxman@hud.ac.uk', 'password' => Hash::make('password2')]);
    }

}
