<?php

//Object oriented programming

class User {
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password) {
       $this->name = $name;
       $this->email = $email;
       $this->password = $password;

    }


    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}




$user1 = new User('Brad', 'brad@gmail.com', '1234');
$user2 = new User('John', 'john@gmail.com', '4567');

echo $user1->email;
echo $user2->name;


//Inheritence

class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;    
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '12345', 'Manager');

echo $employee1->get_title();

