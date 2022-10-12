<?php
require_once './Bicycle.php';
require_once './Car.php';
require_once './Camion.php';

// Instanciation d'un nouvel objet $bike 

$bike = new Bicycle('blue', 1, 'strong human energy');
echo $bike->forward();
echo $bike->brake();

// Instanciation d'un nouvel objet $car1 

$car1 = new Car('yellow', 4, 'diesel');
echo $car1->forward();
echo $car1->brake();

// instanciation de nouveaux camion 

$camion = new Camion('blue', 3, "electric", 5);
echo $camion->forward();
echo $camion->brake();
var_dump($camion);

$camion2 = new Camion("red", 5, "fuel", 10);
$camion2->setChargement(10);
echo $camion2->charge();


?>