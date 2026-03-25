<?php

use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use Illuminate\View\View;
use Illuminate\Http\Request;

Route::get('/home', function () {
    return 'Bonjour Laravel';
});

Route::resource('/patients',PatientsController::class);

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');


Route::get('/test-index', [TestController::class, 'index']);

Route::get('/test', [TestController::class, 'show']);


Route::view('/view', 'accueil');


Route::get('/home/{nom}', function ($nom) {
    return 'Bonjour ' . $nom;
});

Route::get('/home/{nom}/{age?}', function ($nom, $age = 7) {
    return "Bonjour $nom votre Age est $age ans";
});

////TP2
Route::get('/', function () {
    return 'You are in the Home';
});

Route::get('login', function () {
    return 'You are in the Login page';
});
Route::get('/page/1', function () {
    return 'You are in the First page';
});
Route::get('contact', function () {
    return "C'est moi le contact.";
});

Route::get('{n}', function ($n) {
    return 'Je suis la page ' . $n . ' !';
});

/* Route::get('/test/{param}', function($param) {
return "Le paramétre est $param";
}); */

Route::get('/test/{param}', function ($param) {
    return view('welcome', ["param" => $param]);
});

Route::get('/profile', function () {
    return view('profile_form');
})->name('profile');


/* Route::get('/Formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire?}', function($formation,$filiere,$groupe,$stagiaire = 2026) {
return "Les donnés :[$formation,$filiere,$groupe,$stagiaire].";
}); */

Route::view('/Formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire?}', 'data');


// Route for handling form submission
Route::post('/profile', function (Request $request) {
    $nom = $request->input('nom');
    $email = $request->input('email');

    return "Nom: " . $nom . " | Email: " . $email;
});
