<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class TrainersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trainers')->insert([
            [
                'fname' => 'John',
                'lname' => 'Doe',
                'age' => 30,
                'image' => 1,
                'telephone' => '123456789',
                'email' => 'john@example.com',
                'date_of_birth' => '1993-05-15',
                'type' => 'Full-time',
                'working_place' => 'XYZ Gym',
                'address' => '123 Main Street',
                'about' => 'Experienced fitness trainer.',
            ],
            [
                'fname' => 'miin',
                'lname' => 'Doe',
                'age' => 30,
                'image' => 1,
                'telephone' => '123456789',
                'email' => 'miin@example.com',
                'date_of_birth' => '1993-05-15',
                'type' => 'Full-time',
                'working_place' => 'XYZ Gym',
                'address' => '123 Main Street',
                'about' => 'Experienced fitness trainer.',
            ],
            [
                'fname' => 'zou',
                'lname' => 'Doe',
                'age' => 30,
                'image' => 1,
                'telephone' => '123456789',
                'email' => 'zou@example.com',
                'date_of_birth' => '1993-05-15',
                'type' => 'Full-time',
                'working_place' => 'XYZ Gym',
                'address' => '123 Main Street',
                'about' => 'Experienced fitness trainer.',
            ],
        ]);
    }
}
