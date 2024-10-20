<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculerS3 extends Controller
{
    public function calcule(Request $req){
        $s= $req->nbr1+$req->nbr2;
        $m= $req->nbr1*$req->nbr2;
        $d= $req->nbr1/$req->nbr2;
        $sou= $req->nbr1-$req->nbr2;
        return view("s3/ex2/affichageCalculer")->with("somme",$s)->with("division",$d)->with("soustraction", $sou)->with("multiplication", $m);
    }

    public function calcule2(Request $req){
        return view("s3/ex2/affichageCalculer")->with("nbr1",$req->nbr1)->with("nbr2",$req->nbr2);
    }
}
