<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="calcule" method="post">
        @csrf
        nbr 1 : <input type="text" name="nbr1">
        nbr 2 : <input type="text" name="nbr2">
        <input type="submit" value="Calculer">
    </form>
</body>
</html>
