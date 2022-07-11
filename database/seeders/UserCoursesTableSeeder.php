<?php

namespace Database\Seeders;

use App\Models\UserCourses;
use Illuminate\Database\Seeder;

class UserCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserCourses::factory()->count(500)->create();
    }
}
