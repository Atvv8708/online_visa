<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class QuestionFactory extends Factory
{
    public function definition(): array
    {
        $fakeQuestions = [
            "What is your favorite " . fake()->word . "?",
            "How often do you " . fake()->word . "?",
            "Do you prefer " . fake()->word . " or " . fake()->word . "?",
            "Why is " . fake()->word . " important?",
        ];
        return [
            'question' => fake()->randomElement($fakeQuestions)
        ];
    }
}
