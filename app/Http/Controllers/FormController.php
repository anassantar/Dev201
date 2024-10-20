<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function information(Request $req)
    {
        return "nom : " . $req->nom . " prenom: " . $req->prenom . " age : " . $req->age;
    }
}
