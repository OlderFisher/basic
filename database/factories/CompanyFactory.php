<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->tollFreePhoneNumber(),
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'address' => $this->faker->streetAddress(),
            'zip' => $this->faker->postcode,
            'logo' => '',
            'website' => $this->faker->url,
        ];
    }
}
