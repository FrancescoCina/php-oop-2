<?php

require_once __DIR__ . '/Product.php';

class TypeProduct extends Product
{

    private $type;

    // CONSTRUCTOR
    public function __construct($_name, $_price, $_type)
    {
        $this->type = $_type;
        parent::__construct($_name, $_price);
    }

    // GETTER
    protected function getType()
    {
        return $this->type;
    }

    // METHODS
    public function echoType()
    {
        echo $this->getType();
    }

    public function echoPrice()
    {
        echo parent::getPrice();
    }

    public function getPriceForIndex()
    {
        return parent::getPrice();
    }
}

$mouse = new TypeProduct('keyboard', '25', 'tech');

/* echo $mouse->echoName();
echo '<br/>';
$mouse->echoType();
echo '<br/>';

$mouse->echoPrice(); */
