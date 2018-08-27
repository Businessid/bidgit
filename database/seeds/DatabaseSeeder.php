<?php

use Illuminate\Database\Seeder;
use Database\Seeds\Activities_Table_Seed;
use Database\Seeds\Categories_Table_Seed;
use Database\Seeds\Countries_Table_Seed;
use Database\Seeds\Legal_Status_Table_Seed;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Activities_Table_Seed::class);
        $this->call(Categories_Table_Seed::class);
        $this->call(Countries_Table_Seed::class);
        $this->call(Legal_Status_Table_Seed::class);
    }
}
