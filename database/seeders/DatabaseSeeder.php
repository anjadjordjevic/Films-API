<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Reditelj;
use App\Models\User;
use App\Models\Zanr;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Film::truncate();
        Reditelj::truncate();
        Zanr::truncate();
        \App\Models\User::truncate();

        \App\Models\User::factory(5)->create();

        Film::factory(3)->create();

        /*$user1 = User::factory()->create();
        $zanr1 = Zanr::factory()->create();
        $zanr2 = Zanr::factory()->create();
        $reditelj1 = Reditelj::factory()->create();

        Film::factory(5)->create([
            'user_id'=>$user1->id,
            'zanr_id'=>$zanr1->id,
            'reditelj_id'=>$reditelj1->id
        ]);*/


        /*Film::create([
            'id' => 1,
            'naziv' => "Titanic",
            'godina_izdanja' => "1997",
            'opis' => "Titanik je američki film iz 1997. godine. Tema filma je romantična priča o bogatoj devojci i siromašnom momku koji se susreću i zaljubljuju na „nepotopivom brodu“, dok posada broda žuri da obori dotadašnji rekord u putovanju preko Atlantika (na putu im stoji „samo“ santa leda).",
            'user_id' => 1,
            'zanr_id'=> 1,
            'reditelj_id'=> 1
        ]);

        Film::create([
            'id' => 2,
            'naziv' => "Betmen",
            'godina_izdanja' => "2004",
            'opis' => "Betmen američki je superherojski film iz 2022. godine. Temelji se na istoimenom liku DC Comics-a. Film su producirali DC Films, 6th & Idaho i Dylan Clark Productions, a distribuirao ga je Warner Bros. Pictures. Ribut je filmske franšize Betmen.",
            'user_id' => 1,
            'zanr_id'=> 3,
            'reditelj_id'=> 2
        ]);

        Reditelj::create([
            'id' => 1,
            'ime' => "James",
            'prezime' => "Cameron",
            'datum_rodjenja' => "1923/11/07",
            'pol' => "muski"
        ]);

        Reditelj::create([
            'id' => 2,
            'ime' => "Matt",
            'prezime' => "Reeves",
            'datum_rodjenja' => "1945/12/27",
            'pol' => "muski"
        ]);

        Zanr::create([
            'id' => 1,
            'naziv' => "dokumentarac",
        ]);

        Zanr::create([
            'id' => 2,
            'naziv' => "komedija",
        ]);

        Zanr::create([
            'id' => 3,
            'naziv' => "naucna fantastika",
        ]);*/


    }
}
