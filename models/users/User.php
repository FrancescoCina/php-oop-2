<?php

class User
{
    protected $name;
    protected $email;
    protected $age;
    protected $discount;



    // CONSTRUCTOR
    public function __construct($_name, $_email, $_age)
    {
        $this->name = $_name;
        $this->email = $_email;
        $this->age = $_age;
    }



    // GETTER
    protected function getName()
    {
        return $this->name;
    }
    protected function getDiscount()
    {
        return $this->discount;
    }
    protected function getEmail()
    {
        return $this->email;
    }

    protected function getAge()
    {
        return $this->age;
    }



    // SETTER

    public function setEmail()
    {
        return $this->email;
    }

    public function setDiscount()
    {
        if ($this->age < 25) {
            return $discount = 25;
        } else {
            return $discount = 0;
        }
    }


    // METHODS TO PRINT
    public function echoName()
    {
        echo $this->getName();
    }
}

$user1 = new User('Francesco', 'fra@gmail', '21');

/* echo $user1->setEmail();
echo '<br/>';
echo $user1->setDiscount();
echo '<br/>';
 */