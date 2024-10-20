<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="verifierfiles" method="post" enctype="multipart/form-data">
        @csrf
        cv :
        <input type="file" name="cv">
        <br><br>
        photo :
        <input type="file" name="photo" id="">
        <br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
