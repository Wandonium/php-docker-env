<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    public $name;
    public $email;
    public $password;

    // public function __construct() {
    //     echo 'constructor ran';
    // }
    
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

// Instantiate a user object
$user1 = new User('Brad', 'brad@email.com', 'password');
$user2 = new User('John', 'john@email.com', 'password');

// $user1->name = 'Brad';

// var_dump($user1);
// var_dump($user2);

// $user1->set_name('John');
// var_dump($user1);
// echo $user1->get_name();

// Inheritance
class Employee extends User {

    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@email.com', '3434', 'Manager');

echo $employee1->get_title();