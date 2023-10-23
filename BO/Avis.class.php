<?php
class Avis {
    private $id;
    private $idRestaurant;
    private $auteur;
    private $commentaire;
    private $note;

    public function __construct($id, $idRestaurant, $auteur, $commentaire, $note) {
        $this->id = $id;
        $this->idRestaurant = $idRestaurant;
        $this->auteur = $auteur;
        $this->commentaire = $commentaire;
        $this->note = $note;
    }

    public function getId() {
        return $this->id;
    }

    public function getIdRestaurant() {
        return $this->idRestaurant;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getCommentaire() {
        return $this->commentaire;
    }

    public function getNote() {
        return $this->note;
    }
}
