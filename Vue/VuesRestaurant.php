<?php
class VuesRestaurant {
    public function showHome($restaurants) {
        echo '<h1>Vos restaurants préférés</h1>';
        foreach ($restaurants as $restaurant) {
            echo '<section>';
            echo '<a href="?id=' . $restaurant->getId() .  '"><h2>' . $restaurant->getNom() . '</h2></a>';
            echo '<p>' . $restaurant->getVille() . '</p>';
            echo '<p>' . $restaurant->getDesc() . '</p>';
            echo '</section>';
        }
    }

    public function showRestaurant($restaurant) {
        echo '<h1>' . $restaurant->getNom() . '</h1>';
        echo '<p>' . $restaurant->getAdresse() . $restaurant->getCp() . $restaurant->getVille() . '</p>';
        echo '<h2>Description</h2>';
        echo '<p>' . $restaurant->getDesc() . '</p>';
        echo '<h2>Avis</h2>';
        foreach($restaurant->getAvis() as $unAvis) {
                echo '<p>' . ($unAvis->getAuteur() !== null ? $unAvis->getAuteur() : 'Anonyme') . '   ' . $unAvis->getNote() . '/5</p>';
                echo '<p>' . $unAvis->getCommentaire() . '</p>';
        }
    }
}