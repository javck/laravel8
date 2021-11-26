<?php

namespace Database\Seeders;

use App\Models\Cgy;
use Illuminate\Database\Seeder;

class CgySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cgy::factory()->times(10)->create();
    }
}
