<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patients')->insert([
[
 'num_dossier'=> 1,
 'nom'=> "Mammah",
 'prenom'=> "Mohammed",
 'groupe_sanguin'=> "O"
],
[
 'num_dossier'=>2,
 'nom'=> "Arirri",
 'prenom'=> "Ayman",
 'groupe_sanguin'=> "AB+"
],
[
 'num_dossier'=> 3,
 'nom'=> "Znaki",
 'prenom'=> "Ali",
 'groupe_sanguin'=> "A-"
]
 
]);

    }
}
