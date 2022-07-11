<?php

namespace Database\Seeders;

use App\Models\CourseTags;
use Illuminate\Database\Seeder;

class CourseTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseTags::factory()->count(500)->create();
    }
}
