<?php

    //define a class    
    class Fruit{
        
        //properties
        private $name;
        private $color;

        //constructor
        function __construct($nam){
            $this -> name = $nam;
        }
        
        //accessor methods
        function get_name(){
            return $this -> name;
        }

    }


    //create an object
    $obj1 = new Fruit("Apple");
    $obj2 = new Fruit("Banana");


    echo $obj1 -> get_name() . "<br>" ;
    echo $obj2 -> get_name();



    //if you create a __construct() function, php will automatically call this function
    //when you create an object from a class.
?>