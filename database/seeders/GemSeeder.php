<?php

namespace Database\Seeders;

use App\Models\Gem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gems = [
            [
                'name' => 'Amethyst',
                'description' => 'Amethyst is a gemstone that is often used in jewelry and is often used as a gemstone.',
                'image' => '',
                'required_user_level' => 1,
                'rarity_percentage' => 20,
                'bonus_multiplier' => 2
            ],
            [
                'name' => 'Emerald',
                'description' => 'Emerald is a gemstone that is often used in jewelry and is often used as a gemstone.',
                'image' => '',
                'required_user_level' => 10,
                'rarity_percentage' => 15,
                'bonus_multiplier' => 3
            ],
            [
                'name' => 'Sapphire',
                'description' => 'Sapphire is a gemstone that is often used in jewelry and is often used as a gemstone.',
                'image' => '',
                'required_user_level' => 20,
                'rarity_percentage' => 10,
                'bonus_multiplier' => 5
            ],
            [
                'name' => 'Ruby',
                'description' => 'Ruby is a gemstone that is often used in jewelry and is often used as a gemstone.',
                'image' => '',
                'required_user_level' => 40,
                'rarity_percentage' => 5,
                'bonus_multiplier' => 7
            ],
            [
                'name' => 'Diamond',
                'description' => 'Diamond is a gemstone that is often used in jewelry and is often used as a gemstone.',
                'image' => '',
                'required_user_level' => 60,
                'rarity_percentage' => 1,
                'bonus_multiplier' => 9
            ]
        ];

        foreach ($gems as $gem) {
            Gem::factory()->create($gem);
        }
    }
}
