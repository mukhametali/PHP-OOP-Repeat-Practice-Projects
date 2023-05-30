<?php

error_reporting(-1);
require_once "classes/Product.php";

function debug($data)
{
    echo "<pre>" . print_r($data,1) . "</pre>";
}

$book = new Product('Harry Potter',200,null,700);
$notebook = new Product('Asus',20500,'Intel');

debug($book);
debug($notebook);

echo $book->getProduct('book');
echo $notebook->getProduct();

