<?php

namespace Database\Seeders;

use App\Models\ForgeLevel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ForgeLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forgeLevels = [
            [
                'level' => 1,
                'required_gold' => 0
            ],
            [
                'level' => 2,
                'required_gold' => 1000
            ],
            [
                'level' => 3,
                'required_gold' => 25000
            ],
            [
                'level' => 4,
                'required_gold' => 100000
            ],
            [
                'level' => 5,
                'required_gold' => 250000
            ],
            [
                'level' => 6,
                'required_gold' => 500000
            ],
            [
                'level' => 7,
                'required_gold' => 1000000
            ],
            [
                'level' => 8,
                'required_gold' => 2500000
            ],
            [
                'level' => 9,
                'required_gold' => 5000000
            ],
            [
                'level' => 10,
                'required_gold' => 25000000
            ]
        ];

        foreach ($forgeLevels as $level) {
            ForgeLevel::factory()->create($level);
        }
    }
}
