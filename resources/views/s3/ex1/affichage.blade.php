<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage</title>
</head>
<body>
    {{$nom}}<br>
    {{$data->prenom}}<br>
    {{$data->age}}<br>
    {{$data->_token}}<br>
    {{$data->sex}}<br>
    {{$data->message}}<br>
    {{$data->ville}}<br>
    @if (isset($data->loisir))

    @foreach ($data->loisir as $loisi)
    {{$loisi}}
    @endforeach
    @endif

    @foreach ($collection as $item)

    @endforeach

</body>
</html>
