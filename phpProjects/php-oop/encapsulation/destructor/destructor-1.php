<?php

    class Fruit
    {
        public $name;
        public $color;

        //constructor function
        function __construct($nam)
        {
            $this -> name = $nam;
        }

        //destructor function
        function __destruct()
        {
            echo "The fruit is {$this -> name}.";
        }
    }
    
    //create an object
    $fruit = new Fruit("Apple");


    //a __construct() function that is automatically called when you create an object from a class, 
    //and a __destruct() function that is automatically called at the end of the script

?>