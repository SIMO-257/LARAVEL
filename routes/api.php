<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StagiairesController;

Route::apiResource("stagiaires",StagiairesController::class);
