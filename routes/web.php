<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EntreesEauxController;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\PatientsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\RomanController;
use App\Http\Middleware\AgeMiddleware;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\DeconnexionController;




Route::middleware("guest")->group(function(){
    //Les routes d'inscription
    Route::get("/register", [InscriptionController::class, "show"])->name("register-form");
    Route::get("/login", [ConnexionController::class, "show"])->name("login-form");
    Route::post("/register", [InscriptionController::class, "register"])
    ->name("register");
});

Route::middleware("auth")->group(function(){
    Route::post("/logout", [DeconnexionController::class, "logout"])->name("logout");
    Route::resource("/patients",PatientsController::class);
});






Route::view("/verif", "tp1.verif")->name('verif');
Route::post("/accueil",function(Request $request){
    $age = $request->input('age');
    return view("tp1.accueil",compact('age'));
})->name("accueil")->middleware('age');



////Controle 1://////
Route::resource("/romans",RomanController::class);
/////////////////////


////Controle 2://////
Route::post("/entres",[EntreesEauxController::class,"store"])->name("ajouter");
Route::get("/entrees/{riviere}",[EntreesEauxController::class, 'ListBarrageByRiviere'])->name("afficher-barrage");
Route::get("/barrages/{nomBarrage}",[EntreesEauxController::class,"calculGTotal"])->name("calculer-total");
Route::post("/entrees",[EntreesEauxController::class," getEntreesEaux"])->name("index");
/////////////////////


Route::get('/home', function () {
    return 'Bonjour Laravel';
});

Route::resource('/patients',PatientsController::class);

Route::get('/test-index', [TestController::class, 'index']);

Route::get('/test', [TestController::class, 'show']);





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


Route::get('/projets', [GestionController::class, 'Afficher'])->name('index');
Route::get('/projets/{id}', [GestionController::class, 'show'])->name('show');
Route::get('/etapes/create', function() {
    return view('gestion.create');
})->name('create');

Route::post('/etapes', [GestionController::class, 'store'])->name('store');





Route::view("home", "home")->name('home');
Route::post("page_secrete", function() {
    return view("page_secrete");
})->name("page_secrete")->middleware(CheckAge::class);


