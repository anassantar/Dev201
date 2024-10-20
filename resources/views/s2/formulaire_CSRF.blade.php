<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="traitement" method="post">
        @csrf
        <h1>Mon formulaire</h1>
        <input type="text" placeholder="nom" name="nom">
        <input type="text" placeholder="prenom" name="prenom">
        <input type="text" placeholder="age" name="age">
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>
