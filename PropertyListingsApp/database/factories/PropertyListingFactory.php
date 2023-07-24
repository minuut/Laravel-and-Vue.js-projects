<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PropertyListing;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyListing>
 */
class PropertyListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'tags' => implode(',', $this->faker->words(3)),
            'company' => $this->faker->company,
            'email' => $this->faker->email,
            'website' => $this->faker->domainName,
            'location' => $this->faker->address,
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(50000, 900000),
        ];
}

}