<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl,
            'required_forge_level' => 1,
            'required_ore_id' => function () {
                return OreFactory::new()->create()->id;
            },
            'required_ore_quantity' => $this->faker->numberBetween(1, 100),
            'required_seconds_to_forge' => $this->faker->numberBetween(1, 100),
            'sale_price' => $this->faker->numberBetween(1, 100),
            'experience_gain' => $this->faker->numberBetween(1, 100),
        ];
    }
}
