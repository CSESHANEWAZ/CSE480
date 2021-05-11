<?php

    class Calculator
    {
        private $myValue;

        public function __construct($val)
        {
            $this -> myValue = $val;
        }

        public function square()
        {
            echo "Square of $this->myValue = " . ($this->myValue * $this->myValue) . "</br>";
        }

        public function qube()
        {
            echo "Qube of $this->myValue= " . ($this->myValue * $this->myValue * $this->myValue) . "</br>";
        }
    } 
    
    
    $obj1 = new Calculator(4);
    $obj2 = new Calculator(8);

    echo "For object 1 </br>";
    $obj1 -> square();
    $obj1 -> qube();

    echo "<br>";
    
    echo "For object 2 </br>";
    $obj2 -> square();
    $obj2 -> qube();


?>