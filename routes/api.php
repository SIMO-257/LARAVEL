<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StagiairesController;

Route::apiResource("stagiaires",StagiairesController::class);
Route::get("stagiaires/filiere/{id}",[StagiairesController::class, "afficher"]);
Route::get("stagiaires/filiere",[StagiairesController::class, "filieres_list"]);
