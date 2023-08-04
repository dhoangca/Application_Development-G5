<?php

// database/seeders/UserSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('123456'),
                'email' => 'admin@gmail.com',
                'status' => 'active',
                'role' => 'training',
            ],
            [
                'username' => 'Hoang Ca',
                'password' => Hash::make('123456'),
                'email' => 'hoangca@gmail.com',
                'status' => 'active',
                'role' => 'admin',
            ],
            [
                'username' => 'pro',
                'password' => Hash::make('123456'),
                'email' => 'pro@gmail.com',
                'status' => 'active',
                'role' => 'trainer',
            ],
            [
                'username' => 'Cong Minh',
                'password' => Hash::make('123456'),
                'email' => 'congminh@gmail.com',
                'status' => 'active',
                'role' => 'admin',
            ],
            [
                'username' => 'Chu Luong',
                'password' => Hash::make('123456'),
                'email' => 'chuluong@gmail.com',
                'status' => 'active',
                'role' => 'admin',
            ],
            [
                'username' => 'Che Linh',
                'password' => Hash::make('123456'),
                'email' => 'chelinh@gmail.com',
                'status' => 'active',
                'role' => 'admin',
            ],
            // Add more users as needed
        ]);
    }
}
