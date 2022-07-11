<?php

namespace Database\Seeders;

use App\Models\Documents;
use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documents::factory()->count(500)->create();
    }
}
