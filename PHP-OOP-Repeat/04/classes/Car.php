<?php

class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;
    public $year;

    public function __construct($color, $wheels, $speed, $brand, $year)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        $this->year = $year;
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

    public function __destruct()
    {
        var_dump($this);
    }


}