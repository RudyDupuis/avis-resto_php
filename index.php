<?php
require './BO/Restaurant.class.php';
require './BO/Avis.class.php';
require './Model/ModelRestaurant.php';
require './Vue/VuesRestaurant.php';

$model = new ModelRestaurant();
$vue = new VuesRestaurant();

$page = isset($_GET['id']) ? 'restaurant' : 'home';

if($page === 'home') {
    $restaurants = $model->getRestaurants();
}

if($page === 'restaurant') {
    $restaurant = $model->getRestaurantById($_GET['id']);
} 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avis Restaurant</title>
</head>
<body>
    <?php
    if($page === 'home') {
        $vue->showHome($restaurants);
    }

    if($page === 'restaurant') {
        $vue->showRestaurant($restaurant);
    } 

    ?>
</body>
</html>
