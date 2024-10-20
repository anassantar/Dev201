<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="getNP" method="post">
        @csrf
        nom : <br>
        <input type="text" name="nom"><br><br>
        prenom : <br>
        <input type="text" name="prenom"><br><br>
        <input type="submit" value="Suivant">
    </form>
</body>
</html>
