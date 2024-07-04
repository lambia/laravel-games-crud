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
        $newRecord->description = "Infuriava una vera tempesta di neve... piovevano proiettili di ghiaccio come se il cielo volesse vendicarsi della terra. Tutti cercavano un riparo, come se non ci fosse più un domani.";
        $newRecord->price = 9.99;
        $newRecord->release_year = 2001;
        $newRecord->cover_image = "https://sm.ign.com/ign_it/game/default/thumb-1920-656637_9p97.jpg";
        $newRecord->vote = 10;
        $newRecord->save();

        //Poi, per 11 volte...
        for ($i=0; $i < 11; $i++) { 
            //Creo UN gioco
            $newRecord = new Game();
            $newRecord->name = $faker->sentence(2);
            $newRecord->description = $faker->paragraph(3);
            $newRecord->price = $faker->randomFloat(2, 0.99, 69.99);
            $newRecord->release_year = $faker->numberBetween(1981, 2024);
            $newRecord->cover_image = "https://picsum.photos/id/" . $faker->numberBetween(1, 700) . "/1920/1080";
            $newRecord->vote = $faker->randomDigit(); //equivalente di $faker->numberBetween(0, 9);
            $newRecord->save();
        }

    }
}
