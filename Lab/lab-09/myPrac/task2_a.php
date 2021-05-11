<?php

    class Calculator
    {
        public $myValue;

        public function setValue($val)
        {
            $this -> myValue = $val;
        }

        public function square()
        {
            echo "Square = " . ($this->myValue * $this->myValue) . "</br>";
        }

        public function qube()
        {
            echo "Qube = " . ($this->myValue * $this->myValue * $this->myValue) . "</br>";
        }
    } 
    
    $obj1 = new Calculator;
    $obj2 = new Calculator;

    echo "For object 1 </br>";
    $obj1 -> setValue(15);
    $obj1 -> square();
    $obj1 -> qube();

    echo "<br>";
    
    echo "For object 2 </br>";
    $obj2 -> setValue(5);
    $obj2 -> square();
    $obj2 -> qube();


?>