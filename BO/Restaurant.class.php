<?php 
class Restaurant {
    private $id;
    private $nom;
    private $adresse;
    private $cp;
    private $ville;
    private $tel;
    private $desc;
    private $avis = [];

    public function __construct($id, $nom, $adresse, $cp, $ville, $tel, $desc) {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->tel = $tel;
        $this->desc = $desc;
    }

    public function addAvis($avis) {
        $this->avis = $avis;
    }

    public function getAvis() {
        return $this->avis;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getCp() {
        return $this->cp;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getDesc() {
        return $this->desc;
    }
}
