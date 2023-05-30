<?php

error_reporting(-1);
require_once "classes/Product.php";
require_once "classes/I3D.php";
require_once "classes/IGadget.php";
require_once "classes/NotebookProduct.php";
require_once "classes/BookProduct.php";


function debug($data)
{
    echo "<pre>" . print_r($data,1) . "</pre>";
}

function offerCase (IGadget $product)
{
    echo "<p>Offer case for gadget {$product->getName()} </p>";
}

$book = new BookProduct('Harry Potter',200,1500);
$notebook = new NotebookProduct('Philips',10000,'AMD');

//var_dump($notebook instanceof NotebookProduct);

offerCase($notebook);
//offerCase($book);


debug($book);

echo $book->getProduct();

class A {};
class B extends A{};
class C {};

$a = new A();
$b = new B();
$c = new C();





