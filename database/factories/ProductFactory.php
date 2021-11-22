<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class ProductFactory extends Factory
{
    #[ArrayShape([
        'name' => "string",
        'category_id' => "\Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed",
        'description' => "string",
        'price' => "int"
    ])]
    public function definition(): array
    {
        return [
            'category_id' => Category::query()->inRandomOrder()->first()->id,
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => mt_rand(1000, 99999)
        ];
    }
}
