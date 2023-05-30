<?php

class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;
    public $year;

    const TEST_CAR = 'prototype';
    const TEST_CAR_SPEED = 80;

    public static $countCar = 0;



    public function __construct($color, $wheels, $speed, $brand, $year)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        $this->year = $year;
        self::$countCar++;
    }

    public static function getCount()
    {
        return self::$countCar;
    }

    public function getCarInfo ()
    {
        return "<h3> About my car:</h3>
            Color: {$this->color}<br>
            Brand: {$this->brand}<br>
            Speed: {$this->speed}<br>
            Year: {$this->year}<br>
            Wheels: {$this->wheels}<br>
        ";
    }

    public function getPrototypeInfo()
    {
        return "<h3> About prototype car:</h3>
            Name: " . self::TEST_CAR .  "<br>
            Speed: " . self::TEST_CAR_SPEED .  "<br>
        ";
    }



}