<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nationalities = [
            'American', 'British', 'Canadian', 'French', 'German',
            'Japanese', 'Indian', 'Brazilian', 'Australian', 'Chinese'
        ];

        $nationalitiesWithLanguages = [
            'English',
            'American',
            'French',
            'German',
            'Japanese',
            'Hindi/English',
            'Portuguese',
            'English',
            'Mandarin',
        ];

        $cities = [
            'Washington, D.C.',
            'London',
            'Ottawa',
            'Paris',
            'Berlin',
            'Tokyo',
            'New Delhi',
            'Brasília',
            'Canberra',
            'Beijing',
        ];


        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'passport' => fake()->ean8(),
            'nationality' => fake()->randomElement($nationalities),
            'gender' => random_int(0, 1),
            'birth_date' => fake()->date($format = 'Y-m-d', $max = '2007-08-21'),
            'language' => fake()->randomElement($nationalitiesWithLanguages),
            'city' => fake()->randomElement($cities),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
