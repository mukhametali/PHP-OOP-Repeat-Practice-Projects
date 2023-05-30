<?php

error_reporting(-1);
require_once "classes/Product.php";
require_once "classes/NotebookProduct.php";
require_once "classes/BookProduct.php";

function debug($data)
{
    echo "<pre>" . print_r($data,1) . "</pre>";
}

$book = new BookProduct('Harry Potter',200,1500);
$notebook = new NotebookProduct('Philips',20500,'Asus');

debug($book);
debug($notebook);

echo $book->getProduct();
echo $notebook->getProduct();

