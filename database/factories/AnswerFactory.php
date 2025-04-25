<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Visa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $visa = Visa::inRandomOrder()->first();
        $question = Question::inRandomOrder()->first();
        return [
            'visa_id' => $visa->id,
            'question_id' => $question->id,
            'answer' => fake()->sentences(2, 5)
        ];
    }
}
