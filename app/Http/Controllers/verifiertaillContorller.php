<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verifiertaillContorller extends Controller
{
    public function verifiertaill(Request $req){
        $req->validate(
            [
            "cv"=>"required|file|max:20971520|mimetypes:application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
            ]
            // max: 20971520 => 20mg
            );
        $req->cv->move(base_path("storage/savefiles/anass_antar"),"anass.{$req->cv->extension()}");
    }
}
