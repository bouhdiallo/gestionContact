<?php


require_once '../modele/contact.php';
require_once '../controller/contactController.php';

//créez une instance de ContactControllerpour pouvoir utiliser ses méthodes

$contactsController = new ContactController();

// on recupere l'id du contact que l'on souhaite recuperer.
if (isset($_POST['supprimer'])) {
    $id = $_POST['id'];
    
    // Utilisez l'ID pour supprimer le contact
    $contactsController->supprimerContact($id);

    // Redirigez l'utilisateur vers la liste des contacts ou une page de confirmation
    header('Location: ../vue/index.php'); // Redirigez vers la liste des contacts
}




