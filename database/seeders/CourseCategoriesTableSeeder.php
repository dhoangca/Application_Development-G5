<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // Array of course categories to be inserted
        $categories = [
            [
                'name' => 'Programming',
                'description' => 'C# Programming.',
            ],
            [
                'name' => 'Application development',
                'description' => 'JAVA Programming.',
            ],
            // Add more categories if needed
        ];

        // Insert the data into the course_categories table
        DB::table('course_categories')->insert($categories);
    }
}
