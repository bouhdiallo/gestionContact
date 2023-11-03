<?php
class Contact {

    private $id;
    private $nom;
    private $prenom;
    private $numeroTelephone;
    private $favori;

    public function __construct($monNom, $monPrenom, $numeroPhone, $monFavori = 0) {
        
        $this->nom = $monNom;
        $this->prenom = $monPrenom;
        $this->numeroTelephone = $numeroPhone;
        $this->favori = $monFavori;
    }

    public function getNom() {
        return $this->nom;
    }
    public function setNom($nouveauNom){
            $this->nom = $nouveauNom;
        }

    public function getPrenom() {
        return $this->prenom;
    }
        
    public function setPrenom($nouveauPrenom){
        $this->prenom = $nouveauPrenom;
    }

    public function getNumeroTelephone() {
        return $this->numeroTelephone;
    }
            
    function setNumeroTelephone($nouveauNumeroTelephone){
        $this->numeroTelephone = $nouveauNumeroTelephone;
    }

    public function getFavori() {
        return $this->favori;
    }

    public function setFavori($nouveauFavori){
        $this->favori = $nouveauFavori;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
}


