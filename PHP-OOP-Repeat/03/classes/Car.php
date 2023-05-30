<?php

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

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
}