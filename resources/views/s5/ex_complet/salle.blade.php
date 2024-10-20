<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="verifierinfosalle" method="post" enctype="multipart/form-data">
        @csrf
        nmr salle :
        <input type="text" name="n_salle" value="{{old("n_salle")}}">
        <br><br>
        largeur :
        <input type="number" name="largeur" value="{{old("largeur")}}" id="">
        <br><br>
        longeur :
        <input type="number" name="longeur" value="{{old("longeur")}}" id="">
        <br><br>
        type :
        <select name="type" id="">
            <option value="cours" @if (old("type")=="cours") selected @endif>cours</option>
            <option value="machine" @if (old("type")=="machine") selected @endif>machine</option>
            <option value="semilaire" @if (old("type")=="semilaire") selected @endif>semilaire</option>
        </select>
        <br><br>
        disponible :

        oui :
        <input type="radio" name="disponibile" value="oui" @if (old("disponibile")=="oui") checked @endif >
        non :
        <input type="radio" name="disponibile" value="non" @if (old("disponibile")=="non") checked @endif>
        <br><br>

        Equipment :
        projecteur :
        <input type="checkbox" name="equipment[]" value="projecteur" @if(old("equipment")) @foreach (old("equipment") as $key=>$item) @if ($item=="projecteur") checked @endif @endforeach @endif id="">
        imprimant :
        <input type="checkbox" name="equipment[]" value="imprimant"  @if(old("equipment")) @foreach (old("equipment") as $key=>$item) @if ($item=="imprimant") checked @endif @endforeach  @endif id="">
        serveur :
        <input type="checkbox" name="equipment[]" value="serveur"  @if(old("equipment")) @foreach (old("equipment") as $key=>$item) @if ($item=="serveur") checked @endif @endforeach  @endif id="">
        television :
        <input type="checkbox" name="equipment[]" value="television"  @if(old("equipment")) @foreach (old("equipment") as $key=>$item) @if ($item=="television") checked @endif @endforeach  @endif id="">
        <br><br>
        <br><br>
        description :
        <textarea name="description" id="" cols="30" rows="10" >{{old("description")}}</textarea>
        <br><br>
        photo :
        <input type="file" name="photo" id="" ></input>
        <br><br>
        list equipe :
        <input type="file" name="list_equip" id="" ></input>
        <br><br>
        fiche responsable :
        <input type="file" name="fiche_respo" id=""></input>
        <br><br>
        <input type="submit" value="Envoyer">
        @if ($errors->any())
        @foreach ($errors->all() as $key=>$error)
        <ul>
            <li>{{$key." - ".$error}};</li>
        </ul>
        @endforeach
        @endif
    </form>
</body>
</html>
