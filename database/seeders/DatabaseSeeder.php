<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
        'id' => 1,
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('1234'),
        'is_admin' => true
       ]);
    }
}
