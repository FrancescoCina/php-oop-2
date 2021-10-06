<?php

class Product
{
    protected $name;
    protected $price;
    public $color;


    // CONSTRUCTOR

    public function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

    // GETTER

    protected function getName()
    {
        return $this->name;
    }

    protected function getPrice()
    {
        return $this->price;
    }

    // SETTER



    // METHODS

    public function echoName()
    {
        echo $this->getName();
    }
}

$pro1 = new Product('prodotto 1', '25');

// echo $pro1->echoName();
