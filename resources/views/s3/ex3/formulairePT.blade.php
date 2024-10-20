<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="getPT?nom={{$nom}}&prenom={{$prenom}}" method="post">
        @csrf
        Poid(kg) : <br>
        <input type="text" name="poid"><br><br>
        Taill (cm):<br>
        <input type="text" name="taill"><br><br>
        <input type="hidden" value="{{$nom}}">
        <input type="hidden" value="{{$prenom}}">
        <input type="submit" value="Suivant">
    </form>
</body>
</html>
