
<?php

 require_once '../modele/contact.php';
require_once 'contactController.php';

 // Créez une instance de ContactController
 $contactsController = new ContactController();

  if (isset($_POST['fav'])) {
      // Récupérez l'identifiant du contact depuis le formulaire POST
      $id = $_POST['id'];

      // Utilisez la méthode "marquerCommeFavori" pour marquer le contact comme favori
      $contactsController->marquerCommeFavori($id);

      //header('Location: ../vue/index.php'); // Redirigez l'utilisateur vers la liste des contacts ou une autre page de votre choix.
 } 








