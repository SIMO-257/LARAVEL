<?php

namespace Database\Seeders;

use App\Models\Roman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class romansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roman::create([
            [
                "titre"=> "Les Misérables",
                "auteur"=> 2,
                "prix"=> 180.00,
                "annee"=> 1987,
                "couverture"=> "/auvcuvcèav",
                "numd"=> 1,
            ],
            [
                "titre"=> "La boite a merveille",
                "auteur"=> 1,
                "prix"=> 190.50,
                "annee"=> 1998,
                "couverture"=> "/rgétzzbdb",
                "numd"=> 1,
            ],
        ]);
    }
}
