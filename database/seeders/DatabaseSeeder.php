<?php

namespace Database\Seeders;

use Eloquent;
use App\Models\Cgy;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Eloquent::unguard();
        User::truncate();
        Task::truncate();
        Cgy::truncate();
        $this->call([
            CgySeeder::class,
            TaskSeeder::class,
            UserSeeder::class
        ]);
        Eloquent::reguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
