<?php
require_once 'Vehicle.php';
require 'car.php';
require 'van.php';



$car = new Car('red', 4 , 'fuel', 4);
$van = new Van('blue', 2, 'diesel', 50, 6);

try{
    $car->setParkBrake(true);
    $van->setParkBrake(true);
     $car->forward();
     $van->forward();
}
catch(Exception $erreur)
{
    if($erreur->getMessage() === "Park brake is on")
    {
     $car->setParkBrake(false);
     $van->setParkBrake(false);
     
    }
}
finally {

    echo "Ma voiture roule comme un donut" . PHP_EOL;

}
