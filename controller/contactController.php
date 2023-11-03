 <?php
class ContactController {
    private $bd ;

    public function __construct() {
        $this->bd = new PDO('mysql:host=localhost;dbname=gestioncontact', 'root', '');
    }
//la fonction prend en parametre un objet contact de type contact
    public function ajouterContact(Contact $contact) {
        $nom = $contact->getNom();
        $prenom = $contact->getPrenom();
        $numero = $contact->getNumeroTelephone();
        $favori = $contact->getFavori() ? 1 : 0;

        $query = "INSERT INTO contact (nom, prenom, numero, favori) VALUES (?, ?, ?, ?)";
        $stmt = $this->bd->prepare($query);
        $stmt->bindParam(1, $nom);
        $stmt->bindParam(2, $prenom);
        $stmt->bindParam(3, $numero);
        $stmt->bindParam(4, $favori);
        
        $stmt->execute();
    }

    public function supprimerContact($id) {
        $query = "DELETE FROM contact WHERE id = ?";
        $stmt = $this->bd->prepare($query);
        $stmt->bindParam(1, $id);

        $stmt->execute();
    }
    public function modifierContact(Contact $contact) {
    $id = $contact->getId();
    $nom = $contact->getNom();
    $prenom = $contact->getPrenom();
    $numero = $contact->getNumeroTelephone();
    $favori = $contact->getFavori();

    $query = "UPDATE contact SET nom = :nom, prenom = :prenom, numero = :numero, favori = :favori WHERE id = :id";
    $stmt = $this->bd->prepare($query);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':numero', $numero);
    $stmt->bindParam(':favori', $favori);
    $stmt->bindParam(':id', $id);
    
    $stmt->execute();
   // header('Location :../vue/index.php');
}

 public function marquerCommeFavori($id){
     $query = "UPDATE contact SET favori = ? WHERE id = $id";
    
     $stmt = $this->bd->prepare($query);
    //  $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Assurez-vous que le marqueur :id est correctement lié.

     $stmt->execute(['oui']);
 }


    public function getContacts() {
        $query = "SELECT * FROM contact"; // Sélectionne tous les enregistrements de la table "contact"
        $stmt = $this->bd->query($query);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC); // Retourne les résultats sous forme de tableau associatif
        return $res;
    }
    

    public function getContactsbyId($id) {
        $query = "SELECT * FROM contact where id =$id"; // Sélectionne tous les enregistrements de la table "contact"
        $stmt = $this->bd->query($query);
        $res = $stmt->fetch(PDO::FETCH_ASSOC); // Retourne les résultats sous forme de tableau associatif
        // return $res;
       

    }
}
