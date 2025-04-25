<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = ["Canada", "Japan", "Brazil", "Germany", "India", "France", "I;taly", "Australia", "Mexico", "South Africa", "Spain", "Thailand", "Nigeria", "Argentina", "Norway"];

         foreach ($countries as $country) {
             Country::create([
                 'name' => $country
             ]);
         }
    }
}
