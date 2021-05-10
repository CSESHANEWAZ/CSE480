<?php

    class MyClass
    {
        private $prop1 = "I'm a class property.";

        //constructor function
        public function __construct()
        {
            echo 'The class "',__CLASS__,'" was initiated.</br>';
        }


        //destructor function
        public function __destruct()
        {
            echo 'The class "',__CLASS__,'" was destroyed.</br>';
        }


        // public function __toString()
        // {
        //     echo "Using the toString method: ";
        //     return $this -> get_property();
        // }

        
        //mutator method
        public function set_property($newval)
        {
            $this -> prop1 = $newval;
        }

        
        //accessor method
        protected function get_property()
        {
            return $this -> prop1 . "</br>";
        }
    }

    
    
    
    //child class of parent class MyClass
    class MyOtherClass extends MyClass
    {
        //constructor function
        public function __construct()
        {
            parent:: __construct();
            echo 'A new constructor in "',__CLASS__,'".</br>';
        }

        public function new_method()
        {
            echo 'From a new method in "',__CLASS__,'".</br>';
        }

        public function call_protected()
        {
            return $this -> get_property();
        }
    }



    $childObj = new MyOtherClass;

    echo $childObj -> new_method();
    $childObj -> set_property("I'm new class property");
    echo $childObj -> call_protected();


?>