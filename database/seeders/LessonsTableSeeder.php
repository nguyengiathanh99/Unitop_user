<?php

namespace Database\Seeders;

use App\Models\Lessons;
use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lessons::factory()->count(500)->create();
    }
}
