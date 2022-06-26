<?php

namespace Database\Seeders;

use App\Models\UserLevel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $x = .066;
        $y = 2;

        foreach (range(1, 99) as $level) {
            $required_experience = pow($level / $x, $y);

            UserLevel::factory()->create([
                'level' => $level,
                'required_experience' => $required_experience
            ]);
        }
    }
}
