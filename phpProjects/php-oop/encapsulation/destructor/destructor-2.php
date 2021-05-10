<?php

    class Fruit
    {
        public $name;
        public $color;

        //constructor function
        function __construct($nam, $col)
        {
            $this -> name = $nam;
            $this -> color = $col;
        }

        //destructor function
        function __destruct()
        {
            echo "The fruit {$this -> name} is {$this -> color} color.";
        }
    }
    
    //create an object
    $fruit = new Fruit("Apple", "red");


    //a __construct() function that is automatically called when you create an object from a class, 
    //and a __destruct() function that is automatically called at the end of the script

?>