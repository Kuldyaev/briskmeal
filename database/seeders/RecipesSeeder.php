<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $count = 200;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                "name" => fake()->text(38),
                "cook_time" => rand(20, 90),
                "description" => fake()->text(rand(700, 1700)),
                "recipe_text" => fake()->text(rand(2000, 10000)),
            ];
        }

        return $data;
    }
}
