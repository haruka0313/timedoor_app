<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Booklist;

class BooklistFactory extends Factory
{
    protected $model = Booklist::class;

    public function definition()
    {
        return [
            'book_name'      => $this->faker->word,
            'category_name'  => $this->faker->word,
            'author_name'    => $this->faker->name,
            'average_rating' => $this->faker->randomFloat(2, 1, 5),
            'voter'          => $this->faker->numberBetween(1, 100),
        ];
    }
}

