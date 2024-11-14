<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ulid;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'user_type' => 'Staff',
                'name' => "user test1",
                'email' => "usertest1@gmail.com",
                'password' => Hash::make('123456'),
                'email_verified_at' => Carbon::now(),
            ],
            [
                'user_type' => 'Student',
                'name' => "User Test 2",
                'email' => "usertest2@gmail.com",
                'password' => Hash::make('123456'),
                'email_verified_at' => Carbon::now(),

            ],
            [
                'user_type' => 'Researcher',
                'name' => "User Test 3",
                'email' => "usertest3@gmail.com",
                'password' => Hash::make('123456'),
                'email_verified_at' => Carbon::now(),

            ],
        ]);
    }
}
