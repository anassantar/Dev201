<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>information de la salle </h1>
    nmr salle : {{$data->n_salle}}<br><br>

    largeur : {{$data->largeur}}<br><br>

    longeur : {{$data->longeur}}<br><br>

    type : {{$data->type}}<br><br>

    disponobile : {{$data->disponibile}}<br><br>

    equipment : <br>
    @isset($data->equipment)
    @foreach ($data->equipment as $key=>$equip)
    {{$key." - ".$equip}} <br>
    @endforeach
    @endisset
    <br><br>


    description : {{$data->description}}<br><br>

    photo : <br>
    1-type : {{$data->photo->getClientMimeType()}}<br>
    2-taill : {{$size_photo}}Mb<br>
    3-nom : {{pathinfo($data->photo->getClientOriginalName(),PATHINFO_FILENAME)}}<br><br>

    list equipe : <br>
    type : {{$data->list_equip->getClientMimeType()}}<br>
    taill : {{$size_list}}Mb<br>
    nom : {{pathinfo($data->list_equip->getClientOriginalName(),PATHINFO_FILENAME)}}<br><br>

    Fiche responsable : <br>
    type : {{$data->fiche_respo->getClientMimeType()}}<br>
    taill : {{$size_fiche}}Mb<br>
    nom : {{pathinfo($data->fiche_respo->getClientOriginalName(),PATHINFO_FILENAME)}}<br>

    

</body>
</html>
