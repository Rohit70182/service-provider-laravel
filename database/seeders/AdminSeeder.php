<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@rohit.in',
                'password' => Hash::make('admin@1836'),
                'role' => 0,
                'customer_id' => Str::random(16),
            ]
        ]);
    }
}
