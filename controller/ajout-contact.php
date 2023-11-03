<?php
session_start();
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

    header('Location: ../vue/index.php');
}

if(isset($_POST['modifier'])){
    
$id = $_SESSION['id'];

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero = $_POST['telephone'];
$favori = $_POST['favori'];

    // echo $nom; die();
// Récupérez les détails du contact à partir de la base de données en utilisant l'ID
$contact = $contactsController->getContactsbyId($id);
// Créez un objet Contact avec les données mises à jour
$contact = new Contact($nom, $prenom, $numero, $favori);
$contact->setId($id);

// Appelez la méthode pour modifier le contact
$contactsController->modifierContact($contact);

// Redirigez l'utilisateur vers la liste des contacts ou une autre page de votre choix.
// header('Location: ../vue/contact-edit.php');
echo "<h1>contact modifié avec succés</h1>";
}
?>


