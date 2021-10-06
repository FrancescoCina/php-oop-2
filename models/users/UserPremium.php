<?php

require_once __DIR__ . '/User.php';

class UserPremium extends User
{

    private $seniority;

    // CONSTRUCTOR

    public function __construct($_name, $_email, $_age, $_seniority)
    {
        parent::__construct($_name, $_email, $_age);
        $this->seniority = $_seniority;
    }

    // SETTER
    public function setDiscount()
    {
        if ($this->seniority > 10) {
            return $discount = 58;
        } else {
            return $discount = 10;
        }
    }

    // METHODS TO PRINT

    public function echoSeniority()
    {
        echo $this->seniority;
    }
}


$user2 = new UserPremium('Mario', 'Rossi', '18', '15');
// echo 'lo sconto per il secondo utente è: ' . $user2->setDiscount();
