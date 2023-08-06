<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// TrainerSeeder.php

use Illuminate\Database\Seeder;
use App\Models\TrainerModel;

class TrainerSeeder extends Seeder
{
    public function run()
    {
        TrainerModel::create([
            'fname' => 'John',
            'lname' => 'Doe',
            'age' => 30,
            'image' => 'path/to/image.jpg',
            'telephone' => '123456789',
            'email' => 'john.doe@example.com',
            'date_of_birth' => '1992-06-15',
            'type' => 'Full-time',
            'working_place' => 'XYZ Corporation',
            'address' => '123 Main Street',
            'about' => 'Experienced trainer with a passion for teaching.',
        ]);

        TrainerModel::create([
            'fname' => 'Jane',
            'lname' => 'Smith',
            'age' => 28,
            'image' => 'path/to/image.jpg',
            'telephone' => '987654321',
            'email' => 'jane.smith@example.com',
            'date_of_birth' => '1994-03-20',
            'type' => 'Part-time',
            'working_place' => 'ABC Training Center',
            'address' => '456 Park Avenue',
            'about' => 'Dedicated trainer specializing in technical courses.',
        ]);

        // Add more trainers as needed
    }
}
