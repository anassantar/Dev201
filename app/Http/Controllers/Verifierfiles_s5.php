<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Verifierfiles_s5 extends Controller
{
    public function verifierfiles(Request $req){
        $req->cv->move(base_path("storage/savefiles/anass_antar"),"anass.{$req->cv->extension()}");
        // public_path()--> dossier pubic
        // getClientOriginalExtension()--> get extension
        // extension() --> get extension
        return ("valid uploaded");
}
}
