<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visa>
 */
class VisaFactory extends Factory
{
    public function definition(): array
    {

        $category = Category::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
        return [
            'category_id' => $category->id,
            'user_id' => $user->id,
            'start_date'=> fake()->date(),
            'end_date'=> fake()->date(),
        ];
    }
}
