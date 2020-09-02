<?php

###
# A zadanie

class User {

    public $first_name;
    public $last_name;
    public $email;
    public $avatar;

    /**
     * User constructor.
     * @param $first_name
     * @param $last_name
     * @param $email
     * @param $avatar
     */

    public function __construct($first_name, $last_name, $email, $avatar) {

        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->avatar = $avatar;

    }

    // setter metoda
    public function setFirstName($firstName = false) {

        if( $firstName )
        {
            $this->first_name = $firstName;
        }
    }

    // getter metoda
    public function firstName() {

        echo $this->first_name;
        echo "<br>";
    }

    // setter metoda
    public function setLastName($lastName = false) {

        if( $lastName )
        {
            $this->last_name = $lastName;
        }
    }

    // getter metoda
    public function lastName() {

        echo $this->last_name;
        echo "<br>";
    }

    // setter metoda
    public function setEmail($email = false) {

        if( $email )
        {
            $this->email = $email;
        }
    }

    // getter metoda
    public function email() {

        echo "Email: " . $this->email;
        echo "<br>";
    }

    // setter metoda
    public function setAvatar($avatar = false) {

        if( $avatar )
        {
            $this->avatar = $avatar;
        }
    }

    // getter metoda
    public function avatar() {

        echo "<a href=\"" . $this->avatar . "\"><img src=\"" . $this->avatar . "\"></img></a>";
        echo "<br>";
    }


    // metoda pre vypis celeho mena
    public function displayName() {

        echo "Cele meno: " . $this->first_name . " " . $this->last_name;
        echo "<br>";

    }

}


###
# B zadanie

class Admin extends User {

    // Extend metada pre vypis celeho mena
    public function displayName() {

        echo "=====<br>";
        echo "ADMIN - Cele meno: " . $this->first_name . " " . $this->last_name;
        echo "<br>";

    }

    // metoda pre znicenie vsetkeho
    public function destroyEverything() {

        echo "ADMIN - Destroy Everything!!!";
        echo "<br>";

    }

}

$userko = new User("First Userko", "Last UserName", "userko@username.com", "https://picsum.photos/120");
$userko->displayName();
$userko->setFirstName('FTest');
$userko->setLastName('FLast');
$userko->firstName();
$userko->lastName();
$userko->displayName();
$userko->email();
$userko->avatar();

$adminko = new Admin("First Adminko", "Last AdminName", "adminko@adminname.com", "https://picsum.photos/150");
$adminko->displayName();
$adminko->destroyEverything();
$adminko->email();
$adminko->avatar();


