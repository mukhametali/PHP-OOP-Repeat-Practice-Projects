<?php

error_reporting(-1);
require_once "classes/Car.php";

function debug($data)
{
    echo "<pre>" . print_r($data,1) . "</pre>";
}

$car1 = new Car();
//$car2 = new Car();

$car1->color = 'black';
$car1->brand = 'toyota';
$car1->speed = 200;
$car1->year = 2018;

//$car2->color = 'white';
//$car2->brand = 'bmw';
//$car2->speed = 250;
//$car2->year = 2020;

debug($car1);
//debug($car2);

echo "<h3> About my car:</h3>
Color: {$car1->color}<br>
Brand: {$car1->brand}<br>
Speed: {$car1->speed}<br>
Year: {$car1->year}<br>
Wheels: {$car1->wheels}<br>
";