<?php

class BookProduct extends Product
{

    public $numPages;


    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(5);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Price without discount: {$this->price}<br>";
        $out .= "NumPages: {$this->numPages}<br>";
        $out .= "Discount: {$this->getDiscount()}%<br>";
        return $out;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

}