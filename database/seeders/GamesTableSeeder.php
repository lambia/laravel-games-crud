<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
       
        //Creo UN gioco
        $newRecord = new Game();
        $newRecord->name = "Max Payne";
        $newRecord->price = 9.99;
        $newRecord->release_year = 2001;
        $newRecord->cover_image = "https://image.api.playstation.com/cdn/EP1004/CUSA04488_00/wkULSyjvjH6xGS9juseLnkjmtG6VGlem.png?w=440";
        $newRecord->vote = 10;
        $newRecord->save();

        //Poi, per 11 volte...
        for ($i=0; $i < 11; $i++) { 
            //Creo UN gioco
            $newRecord = new Game();
            $newRecord->name = $faker->sentence(4);
            $newRecord->price = $faker->randomFloat(2, 0.99, 69.99);
            $newRecord->release_year = $faker->numberBetween(1981, 2024);
            $newRecord->cover_image = "https://picsum.photos/id/" . $faker->numberBetween(1, 700) . "/540/960";
            $newRecord->vote = $faker->randomDigit(); //equivalente di $faker->numberBetween(0, 9);
            $newRecord->save();
        }

    }
}
