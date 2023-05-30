<?php

class Product
{

    private $name;
    protected $price;

    private $discount = 0;

    /*public $public = "Public";
    protected $protected = "Protected";
    private $private = "Private";*/


    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProduct()
    {
        return "<hr><b>About product:</b><br>
                Name: {$this->name}<br>
                Price with discount: {$this->getPrice()}<br>
        ";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }

    public function getDiscount(): int
    {
        return $this->discount;
    }

    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

}