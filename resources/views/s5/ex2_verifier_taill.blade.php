<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="verifiertaill" method="post" enctype="multipart/form-data">
        @csrf
        nom :
        <input type="text" name="nom">
        <br><br>
        prenom :
        <input type="text" name="prenom" id="">
        <br><br>
        cv :
        <input type="file" name="cv">
        <br><br>
        <input type="submit" value="Envoyer">
        @if ($errors->any())
                @foreach ($errors->all() as $error)
                    {{$error}};
                @endforeach
        @endif
    </form>
</body>
</html>
