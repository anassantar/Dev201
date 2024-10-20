<?php

use App\Http\Controllers\CalculerS3;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use Illuminate\Http\Request;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormS3Controller;
use App\Http\Controllers\GestionFormS3;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\validformController;
use App\Http\Controllers\Verifierfiles_s5;
use App\Http\Controllers\verifiertaillContorller;

use Faker\Core\Version;
use Illuminate\Support\Composer;

Route::get('/', function () {
    return view("welcome");
});



// Exercice 1 Seance 1
/*
Route::get('/d-info', function () {
    return view('ex1-s1/dept-informatique');
});

Route::get('/d-mark', function () {
    return view('ex1-s1/dept-marketing');
});


Route::get('/conge', function () {
    return view('ex1-s1/RH/conge/conge');
});

Route::get('/contrat', function () {
    return view('ex1-s1/RH/contrats/contrats');
});

Route::get('/phpV', function () {
    echo (PHP_VERSION);
});
*/
// =======================================

// seance2 :

/*
Route::get('{n}', function ($n){
    if ($n == "informatique") {
        return view('ex1-s1/dept-informatique');
    }
    if ($n == "marketing") {
        return view('ex1-s1/dept-marketing');
    }
    if ($n == "contrat") {
        return view('ex1-s1/RH/contrats/contrats');
    }
    if ($n == "conge") {
        return view('ex1-s1/RH/conge/conge');
    }

});
*/

/*
Route::get('{n?}', function ($n=1){
    return "ma page est : ".$n;
});
*/

// =========================================

// route controller

Route::get('/info', [InfoController::class, 'index']);

// seance2 : formulaire
Route::get("/formulaire", function () {
    return view("s2/formulaire_CSRF");
});

Route::post("/traitement", function (Request $req) {
    return $req;
});

// exercice 1 seance 2 :
Route::get("/formulaire_Control", function () {
    return view("s2/exercice1/formulaire_Control");
});

Route::post("/controleform", [FormController::class, "information"]);


// S3 ex1
// Route::view("/FormulaireS3" , "s3/ex1/FormulaireS3");

Route::get("/FormulaireS3", function () {
    return view("s3/ex1/FormulaireS3");
});

Route::post("/trait_form_s3",[FormS3Controller::class,"info"]);


Route::get("/Calculer", function () {
    return view("s3/ex2/formCalcul");
});


// Route::post("/calcule", [CalculerS3::class, "calcule"]);
Route::post("/calcule", [CalculerS3::class, "calcule2"]);


// ex3 s3

Route::get("/formulaireNP",function(){
    return view("s3/ex3/formulaireNP");
});
Route::post("/getNP",[GestionFormS3::class,"getNomPrenom"]);
Route::post("/getPT",[GestionFormS3::class,"getPoidTaill"]);


// seance 4
// validation de donnes

Route::get("/validForm",function(){
    return view("seance4/validation_donnes/validformulaire");
});

Route::post("/validform",[validformController::class,"validNom"]);


// Seance 5
// 1 : ex1 upload

Route::get("/inscri",function(){
    return view("s5/ex1_upload");
});

Route::post("/verifierfiles",[Verifierfiles_s5::class,"verifierfiles"]);

// 2 : ex2 verifier la taill and extension

Route::get("/verifiertaill",function(){
    return view("s5/ex2_verifier_taill");
});


Route::post("/verifiertaill",[verifiertaillContorller::class,"verifiertaill"]);


// ex complet
Route::get("/salle",function(){
    return view("s5/ex_complet/salle");
});
Route::post("/verifierinfosalle",[SalleController::class,"verifierinfosalle"]);




