<?php 

require_once 'Car.php';

const BR = '<br/>';

$car = new Car('red',7,'electric');
$car->setParkBrake(); // hasParkBrake <-true

try {

    $car->start();

} catch (\Exception $e) {
    
    echo 'Exception: ' . $e->getMessage() . BR;
    
    $car->setParkBrake(); // hasParkBrake <-false

} finally {
    echo BR . "Ma voiture roule comme un donut" . BR;
}