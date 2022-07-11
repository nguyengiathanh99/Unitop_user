<?php

namespace Database\Seeders;

use App\Models\Reviews;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reviews::factory()->count(500)->create();
    }
}
