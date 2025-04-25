<?php

namespace Database\Factories;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected static ?string $password;

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

        $country = Country::inRandomOrder()->first();
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'passport' => fake()->ean8(),
            'nationality' => fake()->randomElement($nationalities),
            'country_id' => $country->id,
            'gender' => true,
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
