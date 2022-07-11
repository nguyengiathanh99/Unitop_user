<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tags::factory()->count(500)->create();
    }
}
