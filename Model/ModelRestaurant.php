<?php
require './Model/connectionProvider.php';

class ModelRestaurant {
    private $pdo;

    public function __construct() {
        $this->pdo = ConnectionProvider::getConnection();
    }

    public function getRestaurants() {
        $restaurants = [];

        $query = $this->pdo->query('SELECT * FROM restaurants');

        while ($row = $query->fetch()) {
            $restaurant = new Restaurant(
                $row['idRestaurant'],
                $row['nom'],
                $row['adresse'],
                $row['cp'],
                $row['ville'],
                $row['telephone'],
                $row['description']
            );

        $restaurants[] = $restaurant;
        }

        return $restaurants;
    }

    public function getRestaurantById($id) {
        $restaurant = null;

        $query = $this->pdo->prepare('SELECT * FROM restaurants WHERE idRestaurant = :idRestaurant');
        $query->bindParam(':idRestaurant', $id);
        $query->execute();

        if ($row = $query->fetch()) {
            $restaurant = new Restaurant(
                $row['idRestaurant'],
                $row['nom'],
                $row['adresse'],
                $row['cp'],
                $row['ville'],
                $row['telephone'],
                $row['description']
            );

            $queryAvis = $this->pdo->prepare('SELECT * FROM avis WHERE idRestaurant = :idRestaurant');
            $queryAvis->bindParam(':idRestaurant', $id);
            $queryAvis->execute();

            $lesAvis = [];

            while ($row2 = $queryAvis->fetch()) {
                $avis = new Avis(
                    $row2['idAvis'],
                    $row2['idRestaurant'],
                    $row2['auteur'],
                    $row2['commentaire'],
                    $row2['note']
                );

                $lesAvis[] = $avis;
            }

        $restaurant->addAvis($lesAvis);
        }

        return $restaurant;
    }
}

