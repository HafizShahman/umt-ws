<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ulid;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'user_type' => 'superadmin',
                'name' => "Super Admin",
                'email' => "admin@umtw.com",
                'password' => Hash::make('123456'),
                'email_verified_at' => Carbon::now(),
            ],
            [
                'role_id' => 2,
                'user_type' => 'umtadmin',
                'name' => "Umt Admin",
                'email' => "umt@umtw.com",
                'password' => Hash::make('123456'),
                'email_verified_at' => Carbon::now(),

            ],
            [
                'role_id' => 3,
                'user_type' => 'Researcher',
                'name' => "User1",
                'email' => "staff1@umtw.com",
                'password' => Hash::make('123456'),
                'email_verified_at' => Carbon::now(),

            ],
            
            [
                'role_id' => 4,
                'user_type' => 'Student',
                'name' => "User2",
                'email' => "staff2@umtw.com",
                'password' => Hash::make('123456'),
                'email_verified_at' => Carbon::now(),

            ],
        ]);
    }
}
