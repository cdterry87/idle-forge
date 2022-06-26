<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'Copper Sword',
                'description' => 'A sword made of copper.',
                'image' => '',
                'required_forge_level' => 1,
                'required_ore_id' => 2,
                'required_ore_quantity' => 2,
                'required_seconds_to_forge' => 60,
                'sale_price' => 100,
                'experience_gain' => 10,
            ],
            [
                'name' => 'Iron Sword',
                'description' => 'A sword made of iron.',
                'image' => '',
                'required_forge_level' => 2,
                'required_ore_id' => 3,
                'required_ore_quantity' => 2,
                'required_seconds_to_forge' => 120,
                'sale_price' => 500,
                'experience_gain' => 50,
            ],
            [
                'name' => 'Silver Sword',
                'description' => 'A sword made of silver.',
                'image' => '',
                'required_forge_level' => 3,
                'required_ore_id' => 4,
                'required_ore_quantity' => 2,
                'required_seconds_to_forge' => 300,
                'sale_price' => 1000,
                'experience_gain' => 100,
            ],
            [
                'name' => 'Gold Sword',
                'description' => 'A sword made of gold.',
                'image' => '',
                'required_forge_level' => 4,
                'required_ore_id' => 5,
                'required_ore_quantity' => 2,
                'required_seconds_to_forge' => 600,
                'sale_price' => 3000,
                'experience_gain' => 300,
            ],
            [
                'name' => 'Platinum Sword',
                'description' => 'A sword made of platinum.',
                'image' => '',
                'required_forge_level' => 5,
                'required_ore_id' => 6,
                'required_ore_quantity' => 2,
                'required_seconds_to_forge' => 1200,
                'sale_price' => 7500,
                'experience_gain' => 750,
            ],
            [
                'name' => 'Mithril Sword',
                'description' => 'A sword made of iron.',
                'image' => '',
                'required_forge_level' => 6,
                'required_ore_id' => 7,
                'required_ore_quantity' => 2,
                'required_seconds_to_forge' => 2700,
                'sale_price' => 20000,
                'experience_gain' => 2000,
            ],
            [
                'name' => 'Orichalcum Sword',
                'description' => 'A sword made of orichalcum.',
                'image' => '',
                'required_forge_level' => 7,
                'required_ore_id' => 8,
                'required_ore_quantity' => 2,
                'required_seconds_to_forge' => 5400,
                'sale_price' => 50000,
                'experience_gain' => 5000,
            ]
        ];

        foreach ($items as $item) {
            Item::factory()->create($item);
        }
    }
}
