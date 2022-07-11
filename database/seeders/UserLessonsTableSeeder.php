<?php

namespace Database\Seeders;

use App\Models\UserLessons;
use Illuminate\Database\Seeder;

class UserLessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserLessons::factory()->count(500)->create();
    }
}
