<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(10)->create();

        $user = User::find(1);
        $tasks = Task::find([1,3,5]);
        $user->tasks()->saveMany($tasks);
    }
}
