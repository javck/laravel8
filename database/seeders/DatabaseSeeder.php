<?php

namespace Database\Seeders;

use Eloquent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints(); //關閉資料庫外鍵偵測

        //順序有講究，請特別注意!!
        //$this->call(CgySeed)
        $this->call(TaskSeeder::class);

        Schema::enableForeignKeyConstraints(); //重開外鍵偵測
    }
}
