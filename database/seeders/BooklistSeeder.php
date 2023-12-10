<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booklist;

class BooklistSeeder extends Seeder
{
    public function run()
    {
        \Database\Factories\BooklistFactory::new()->count(100)->create();
    }
}

