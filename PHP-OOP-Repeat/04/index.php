<?php

error_reporting(-1);
require_once "classes/Car.php";

function debug($data)
{
    echo "<pre>" . print_r($data,1) . "</pre>";
}

$car1 = new Car('red', 4, 180, 'toyota', 2020);
$car2 = new Car('yellow', 4, 280, 'bmw', 2018);

echo $car1->getCarInfo();
echo $car2->getCarInfo();

