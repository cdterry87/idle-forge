<?php

namespace Database\Seeders;

use App\Models\Ore;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            [
                'name' => 'Coal',
                'description' => 'A piece of coal. Required for forging.',
                'image' => '',
                'required_user_level' => 1,
                'required_seconds_to_mine' => 30,
            ],
            [
                'name' => 'Copper Ore',
                'description' => 'A piece of copper ore.',
                'image' => '',
                'required_user_level' => 1,
                'required_seconds_to_mine' => 60,
            ],
            [
                'name' => 'Iron Ore',
                'description' => 'A piece of iron ore.',
                'image' => '',
                'required_user_level' => 5,
                'required_seconds_to_mine' => 120,
            ],
            [
                'name' => 'Silver Ore',
                'description' => 'A piece of silver ore.',
                'image' => '',
                'required_user_level' => 10,
                'required_seconds_to_mine' => 300,
            ],
            [
                'name' => 'Gold Ore',
                'description' => 'A piece of gold ore.',
                'image' => '',
                'required_user_level' => 20,
                'required_seconds_to_mine' => 600,
            ],
            [
                'name' => 'Platinum Ore',
                'description' => 'A piece of platinum ore.',
                'image' => '',
                'required_user_level' => 40,
                'required_seconds_to_mine' => 1200,
            ],
            [
                'name' => 'Mithril Ore',
                'description' => 'A piece of mithril ore.',
                'image' => '',
                'required_user_level' => 60,
                'required_seconds_to_mine' => 2700,
            ],
            [
                'name' => 'Orichalcum Ore',
                'description' => 'A piece of orichalcum ore.',
                'image' => '',
                'required_user_level' => 80,
                'required_seconds_to_mine' => 5400,
            ]
        ];

        foreach ($materials as $material) {
            Ore::factory()->create($material);
        }
    }
}
