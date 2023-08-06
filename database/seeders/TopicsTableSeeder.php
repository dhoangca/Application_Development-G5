<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicsTableSeeder extends Seeder
{
    public function run()
    {
        // Sample data for topics
        $topics = [
            [
                'name' => 'Martial Arts',
                'description' => 'Description for Martial Arts',
                'courseId' => 1, // Replace with the appropriate courseId from the courses table
            ],
            [
                'name' => 'Battery PRO',
                'description' => 'Description for Battery PRO',
                'courseId' => 2, // Replace with the appropriate courseId from the courses table
            ],
            // Add more topics if needed
        ];

        // Insert the data into the topics table
        DB::table('topics')->insert($topics);
    }
}


