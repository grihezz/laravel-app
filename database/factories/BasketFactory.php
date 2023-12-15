<?php

namespace Database\Factories;

use App\Models\Basket;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Basket>
 */
class BasketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */
    protected $model = Basket::class;
    public function definition(): array
    {
        return [
            'user_id'=>User::get()->random()->id,
            'product_id'=>Product::get()->random()->id,
            'count_backet'=>random_int(1,5),


        ];
    }
}
