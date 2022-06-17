<?php

use Illuminate\Database\Seeder;
use App\Wine;
use Faker\Generator as Faker;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++){
            $newWine = new Wine();
            $newWine->name = $faker->words(3, true);
            $newWine->cellar = $faker->words(4, true);
            $newWine->type = $faker->safeColorName();
            $newWine->price = $faker->randomFloat(2, 10, 250);
            $newWine->save();
        }
    }
}