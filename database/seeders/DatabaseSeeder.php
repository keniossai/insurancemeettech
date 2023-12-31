<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->seedWithMySql();
    }


    public function seedWithMySql()
    {
        DB::connection()->getPDO()->exec(
            File::get(database_path('seeders/nbaconference_updated.sql'))
        );
    }
}
