<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'password' => '1234',
            'role' => 'admin',
            'status' => 'admin',
        ]);

        // 
        DB::table('branches')->insert([
            'phone' => '0743196599',
            'amount' => '10000',
            'pin' => '1234',
            'branch' => 'M-Pesa',
        ]);

        DB::table('banks')->insert([
            'card' => '10001000',
            'amount' => '0',
            'date' => '23',
            'month' => '01',
            'cvv' => '1234',
        ]);
    }
}
