<?php

error_reporting(-1);
require_once "classes/Car.php";

function debug($data)
{
    echo "<pre>" . print_r($data,1) . "</pre>";
}

$car1 = new Car();

$car1->color = 'black';
$car1->brand = 'toyota';
$car1->speed = 200;
$car1->year = 2018;

echo $car1->getCarInfo();

