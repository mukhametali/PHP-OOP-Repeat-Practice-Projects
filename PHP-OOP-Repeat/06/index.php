<?php

error_reporting(-1);
require_once "classes/Car.php";

function debug($data)
{
    echo "<pre>" . print_r($data,1) . "</pre>";
}

echo Car::$countCar;
echo "<br>";

$car1 = new Car('red', 4, 180, 'toyota', 2020);
echo Car::$countCar;
echo "<br>";
$car2 = new Car('yellow', 4, 280, 'bmw', 2018);
echo Car::getCount();



echo $car1->getCarInfo();
echo $car2->getCarInfo();
echo $car1->getPrototypeInfo();
echo Car::TEST_CAR_SPEED . "<br>";
echo Car::class;

