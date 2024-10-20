<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="trait_form_s3" method="post">
        @csrf
        <h1>Mon formulaire</h1>
        <input type="text" placeholder="nom" name="nom"><br>
        <input type="text" placeholder="prenom" name="prenom"><br>
        <input type="text" placeholder="age" name="age"><br>
        <select name="ville" id="">
            <option value="casa" selected >casablanca</option>
            <option value="rabat">rabat</option>
            <option value="safi">safi</option>
            <option value="jadida">jadida</option>
        </select><br>
        loisir:
        <div>
            <label for="foot">Football</label>
            <input type="checkbox" name=loisir[]" id="foot" value="foot">
            <label for="bascket">bascketball</label>
            <input type="checkbox" name="loisir[]" id="foot" value="bascket">
            <label for="volly">Vollyball</label>
            <input type="checkbox" name="loisir[]" id="foot" value="volly">
        </div>
        sexe :
        <div>
            <label for="homme">homme</label>
            <input type="radio" name="sex" id="homme" value="homme">
            <label for="bascket">femme</label>
            <input type="radio" name="sex" id="femme" value="femme">
        </div>
        message :
        <div>
            <textarea name="message" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
