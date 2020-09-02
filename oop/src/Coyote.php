<?php

namespace TestNamespace;

class Coyote extends Dog {

    public function bark() {

        echo $this->name . " says WOOF WOOF";
        echo "<br>";
        echo $this->name . " have " . $this->weight . "kg";
        echo "<br><br>";

    }

}

?>