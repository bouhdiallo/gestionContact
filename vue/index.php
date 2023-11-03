
<?php

require_once '../modele/contact.php'; // on fait appel au fichier contact.php qui contient la class contact pour creer un objet contact
require_once '../controller/contactController.php'; // pour creer un objet contactcontroller

//$bd = new PDO('mysql:host=localhost;dbname=gestionContact', 'root', '');
$contactsController = new ContactController(); // contactcontroller contient toute les methodes qui lui permet dinteragir avec la base de donnees


// Autres opérations, par exemple, supprimer, modifier, marquer comme favori.


// Récupération de la liste des contacts depuis la base de données
$contacts = $contactsController->getContacts();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>liste des contacts</h3>
    <?php 
    if (is_array($contacts) && !empty($contacts)): ?>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Numéro de Téléphone</th>
            <th>Favori</th>
        </tr>
        <?php foreach ($contacts as $contact) : ?>
            <tr>
                <td><?= $contact['nom'] ?></td> 
            </tr>
                <td><?= $contact['prenom'] ?></td> 
                <td><?= $contact['numero'] ?></td>
                <td><?= $contact['favori'] ? 'Oui' : 'Non' ?></td>
                <td>


                <form method="post" action="../controller/delete-contact.php">
    <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
    <input type="submit" name="supprimer" value="supprimer">
</form>

 <form method="post" action="../controller/modif-contact.php">
<input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
                    <input type="submit" name="modifier" value="modifier">

                    </form>  
                    
                    <form method="post" action="../controller/marquerfav-contact.php">
    <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
    <input type="submit" name="fav" value="fav">
</form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
        <p>Aucun contact n'a été trouvé.</p>
    <?php endif; ?>
</body>
</html>