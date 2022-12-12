<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Byomkesh',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('111'),
            'role' => 'admin',
            'status' => 'active',
        ]);
    }
}
