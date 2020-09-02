<?php

namespace Testing;

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

?>