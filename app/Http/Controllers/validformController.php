<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// seance 4 valide formation
class validformController extends Controller
{
    public function validNom(Request $req){
        $req->validate(
            [
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'integer|min:18',
            'email' => 'email:strict',
            'adress' => ['required','min:11'],
            'pass' => 'required|confirmed'
            ],
            // [
            // 'nom.required'=>"donner le nom",
            // 'age.integer'=>'donner age sous forme nombre'
            // ]
        );
        return view("seance4/validation_donnes/affichage")->with("nom",$req->nom)->with("prenom",$req->prenom)->with("age", $req->age)->with("email", $req->email)->with("adress", $req->adress);
    }
}


