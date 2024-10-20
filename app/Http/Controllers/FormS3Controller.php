<?php
// ex 1 s3
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormS3Controller extends Controller
{
    public function info(Request $req){
        // ici en va fair un traitement
        return view("s3/ex1/affichage")->with("data",$req)->with("nom",$req->nom);
    }
}
