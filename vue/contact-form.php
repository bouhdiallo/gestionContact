

<?php
require_once '../modele/contact.php'; // on fait appel au fichier contact qui contient la class contact pour creer un objet contact
require_once '../controller/contactController.php'; // pour creer un objet contactcontroller

$contactsController = new ContactController(); // contactcontroller contient toute les methodes qui lui permet dinteragir avec la base de donnees

// Gestion de l'ajout de contact
if (isset($_POST['ajout'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $numero = $_POST['telephone'];
    $favori = ($_POST['favori'] == 'oui') ? 1 : 0;

    $contact = new Contact($nom, $prenom, $numero, $favori);
    $contactsController->ajouterContact($contact);

    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../public/css/styles.css" rel="stylesheet">

</head>
<body>
    
<form method="post" action="../controller/ajout-contact.php">
      <div id="en-tete">
      <h1>Sauvegarder vos contacts en toute simplicité!</h1>
      </div>
                      
            
<div id="general">
                <label for="nom">Nom</label><br>
                <input type="text" placeholder="fall" name="nom" class="largeur"><br><br>

                <label for="prenom">Prenom</label><br>
                <input type="text" placeholder="mara" name="prenom" class="largeur"><br><br>

                <label for="numero">Telephone    <span>sénégal  +221</span></label><br>
                <input type="number" placeholder="77 000 00 00" id="phone" name = "telephone"><br><br>

    <label for="favori">est Favori:</label><br>
    <select name="favori" id="fav">
    <option value="oui">Oui</option>
    <option value="non">Non</option>
    </select><br><br><br><br>
    
    
              <input type="submit" class="inscription" name= "ajout" value="Ajouter">
            </div>
            </form>

</body>
</html>


