<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Courses::factory()->count(500)->create();
    }
}
