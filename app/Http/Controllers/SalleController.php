<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function verifierinfosalle(Request $req){
        $req->validate(
            [
                'n_salle' => 'required',
                'largeur'=>['required','integer','between:2,4'],
                'longeur'=>['required','integer','between:3,7'],
                'type'=>'required',
                'disponibile'=>'required',
                'equipment'=>'required',
                'description'=>['required','max:20'],
                'photo'=>['required','mimetypes:image/png,image/jpeg','max:1048576'],
                'list_equip'=>['required','mimetypes:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],
                'fiche_respo'=>['required','max:102400','mimetypes:application/pdf'],
            ]
            );



            $size_photo=$req->photo->getsize()/1024**2;
            $size_list=$req->list_equip->getsize()/1024**2;
            $size_fiche=$req->fiche_respo->getsize()/1024**2;
            $req->photo->move(base_path("storage/savefiles/salle {$req->n_salle}"),"photo_salle_{$req->n_salle}.{$req->photo->extension()}");
            $req->list_equip->move(base_path("storage/savefiles/salle {$req->n_salle}"),"list_equip_salle_{$req->n_salle}.{$req->list_equip->extension()}");
            $req->fiche_respo->move(base_path("storage/savefiles/salle {$req->n_salle}"),"fiche_respo_salle_{$req->n_salle}.{$req->fiche_respo->extension()}");
            return view("s5/ex_complet/infosalle")->with("data",$req)->with("size_photo",$size_photo)->with("size_list",$size_list)->with("size_fiche",$size_fiche);
    }
}
