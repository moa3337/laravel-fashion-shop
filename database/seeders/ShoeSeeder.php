<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Shoe;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $newShoe = new Shoe;
            $newShoe->model = $faker->name();
            $newShoe->type = $faker->company();
            $newShoe->number = $faker->randomNumber(2);
            $newShoe->color = $faker->colorName();
            $newShoe->quantity = $faker->randomNumber(2);
            $newShoe->image = "https://picsum.photos/200/100";

            $newShoe->save();
        };
    }
}
