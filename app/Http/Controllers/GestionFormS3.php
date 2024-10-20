<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class GestionFormS3 extends Controller
{
    public function getNomPrenom(Request $req){
        return view("s3/ex3/formulairePT")->with("nom",$req->nom)->with("prenom",$req->prenom);
    }
    public function getPoidTaill(Request $req){

        return view("s3/ex3/affichageIMC")->with("poid",$req->poid)->with("taill",$req->taill)->with("nom",$_GET["nom"])->with("prenom",$_GET["prenom"]);
    }
}
