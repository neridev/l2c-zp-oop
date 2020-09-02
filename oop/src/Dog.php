<?php

namespace TestNamespace;

class Dog {

    public $name;
    public $weight;
    protected $eat;
    public $inventory = [];

    // konstruktor
    public function __construct($cName, $cWeight, $cEat, array $cInventory = null) {

        $this->name = $cName;
        $this->weight = $cWeight;
        $this->eat = $cEat;
        $this->inventory = $cInventory;

    }

    // metoda bark
    public function bark() {

        echo $this->name . " says woof woof";
        echo "<br>";
        echo $this->name . " have " . $this->weight . "kg";
        echo "<br><br>";

    }

    // getter metoda
    public function getEat() {

        //echo $this->eat;
        return $this->eat;
    }

    // setter metoda
    public function setEat($eat) {

        $this->weight = $this->weight + $eat;

        if ( $eat > 0 ) {
            
            echo $this->name . " pribral " . $eat . "kg a vazi " . $this->weight . "kg";
            echo "<br><br>";

        } elseif ( $eat < 0 ) {

            echo $this->name . " schudol " . $eat . "kg a vazi " . $this->weight . "kg";
            echo "<br><br>";

        } else {

            echo $this->name . " nepribral.";
            echo "<br><br>";

        }
    }

}

?>