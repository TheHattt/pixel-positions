<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "employer_id" => Employer::factory(),
            "title" => fake()->jobTitle,
            "salary" => fake()->randomElement(['100,000 USD', '78,000 USD', '80,000 USD' , '120,000 USD', '90,000 USD']),
            "location" => fake()->randomElement(['Fully Remote', 'Hybrid', 'Flex Remote', 'Digital Nomad', 'Remote First Companies']),
            "schedule" =>fake()->randomElement(['Full Time' , 'Seasonal', 'Part Time Remote', 'Early Bird' , 'Async First' , 'Flexible Core Hours']),
            "url" => fake()->url,
            "featured" => false

        ];
    }
}
