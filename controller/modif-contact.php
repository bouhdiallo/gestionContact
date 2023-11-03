<?php
session_start();
require_once '../modele/contact.php';
require_once '../controller/contactController.php';

// Créez une instance de ContactController
$contactsController = new ContactController();


// Si le formulaire est soumis pour la modification
if (isset($_POST['modifier'])) {
    // echo "Ok"; die();
    $id = $_POST['id'];
    // echo $id; die();
    $_SESSION['id'] = $id;
     // Récupérez l'ID du contact à partir du formulaire
     header('Location: ../vue/contact-edit.php');
     
}
?>