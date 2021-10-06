<?php

class CreditCard
{
    protected $number;
    protected $cvv;
    protected $expiration;


    // CONSTRUCTOR
    public function __construct($_expiration)
    {

        $this->expiration = $_expiration;
    }


    // SETTER
    public function setCvv($_cvv)
    {

        if (is_numeric($_cvv) && strlen($_cvv) === 3) {
            return $this->cvv = $_cvv;
        } else {
            throw new Exception('CVV non valido');
        }
    }

    public function setCardNumber($_number)
    {
        if (is_numeric($_number) && strlen($_number) === 8) {
            return $this->number = $_number;
        } else {
            throw new Exception('Numero carta non valido');
        }
    }

    // METHODS TO PRINT

    public function echoExpiration()
    {
        echo $this->expiration;
    }
}


$visa = new CreditCard('5555', '10/2025');

// Setting number Card and catching the Exceptionù

try {
    echo $visa->setCardNumber('25836941');
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
};

echo '<br/>';


// Setting cvv and catching the Exception

try {
    echo 'Il Cvv della carta ' . $visa->setCardNumber('25836941') . ' è ' . $visa->setCvv('333');
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
};
