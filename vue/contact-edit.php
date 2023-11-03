<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le contact</title>
    <link href="../public/css/styles.css" rel="stylesheet">
</head>
<body>
    <form method="post" action="../controller/ajout-contact.php">
        <div id="en-tete">
            <h1>Modifier le contact</h1>
        </div>
        <div id="general">
            
            <label for="nom">Nom</label><br>
            <input type="text" name="nom" class="largeur" value="name"><br><br>

            <label for="prenom">Prénom</label><br>
            <input type="text" name="prenom" class="largeur" value="prenom"><br><br>

            <label for="numero">Téléphone <span>Sénégal +221</span></label><br>
            <input type="number" id="phone" name="telephone" value="telephone"><br><br>

            <label for="favori">Est Favori:</label><br>
            <select name="favori" id="fav">
                <option value="oui" name="oui">Oui</option>
                <option value="non" name="oui">Non</option>
            </select><br><br><br><br>

            <input type="submit" class="inscription" name="modifier" value="Modifier">
        </div>
    </form>
</body>
</html>

































  


































