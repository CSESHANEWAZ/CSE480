<?php

    class Myclass
    {
        private $prop1 = "I'm a class property!";

        //constructor
        public function __construct()
        {
            echo 'The class "',__CLASS__,'" was initiated. </br>';
        }

        public function setProperty($newval)
        {
            $this -> prop1 = $newval;
        }

        public function getProperty()
        {
            echo $this -> prop1 . "</br>";
        }

        //destructor
        public function __destruct()
        {
            echo 'The class "',__CLASS__,'" was destroyed. </br>';
        }
    }

    $obj1 = new MyClass;

    $obj1 -> setProperty("I'm a updated class property.");

    $obj1 -> getProperty();

    unset($obj1);

    echo "End of file. </br>"
?>