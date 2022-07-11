<?php

namespace Database\Seeders;

use App\Models\TeacherCourses;
use Illuminate\Database\Seeder;

class TeacherCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherCourses::factory()->count(500)->create();
    }
}
