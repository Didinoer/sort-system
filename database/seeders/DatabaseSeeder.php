<?php

namespace Database\Seeders;

use Database\Factories\pesertaFactory;
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
        // pesertaFactory::factory()->count(300)->create();
        $this->call(GroupsTableSeeder::class);
    }
}
