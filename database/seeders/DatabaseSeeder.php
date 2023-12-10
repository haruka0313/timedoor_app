<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\BooklistSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BooklistSeeder::class);
    }
}
