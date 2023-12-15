<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */
    protected $model = Product::class;
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(20),
            'description'=>$this->faker->text,
            'price'=>random_int(2000,50000),
            'size'=>random_int(30,60),
            'count'=>random_int(20,120),
            'category_id'=>Category::get()->random()->id,

        ];
    }
}
