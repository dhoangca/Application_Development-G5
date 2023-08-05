<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        // Sample data for courses
        $courses = [
            [
                'name' => 'Programming',
                'description' => 'Description for Course 1',
                'categoryId' => 1, // Replace with the appropriate categoryId from the course_categories table
            ],
            [
                'name' => 'WEB DEVELOPMENT',
                'description' => 'Description for Course 2',
                'categoryId' => 2,
            ],
            // Add more courses if needed
        ];

        // Insert the data into the courses table
        DB::table('courses')->insert($courses);
    }
}
