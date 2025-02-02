<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductsTableSeeder::class);
        $this->call(SeasonsTableSeeder::class);
        $this->call(ProductSeasonSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
