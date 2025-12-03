<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Seeder;


class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $images = [
            'storage/upload/course_01.jpg',
            'storage/upload/course_02.jpg',
            'storage/upload/course_03.jpg',
            'storage/upload/course_04.jpg',
        ];

        for ($i = 1; $i <= 50; $i++) {
            Courses::create([
                'title' => 'Course ' . $i,
                'image' => $images[array_rand($images)],
                'price' => mt_rand(500, 5000) / 100,
                'description' => 'This is a sample description for Course ' . $i,
                'category_id' => mt_rand(1, 5),
                'sub_category_id' => mt_rand(1, 10),
            ]);
        }
    }
}
