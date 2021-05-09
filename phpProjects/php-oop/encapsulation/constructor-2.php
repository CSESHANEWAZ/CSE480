<?php

    //define a class    
    class Fruit{
        
        //properties
        private $name;
        private $color;

        //constructor
        function __construct($nam, $col){
            $this -> name = $nam;
            $this -> color = $col;
        }
        
        //accessor methods
        function get_name(){
            return $this -> name;
        }

        function get_color(){
            return $this -> color;
        }

    }


    //create an object
    $obj1 = new Fruit("Apple", "red");
    $obj2 = new Fruit("Banana", "yellow");


    echo $obj1 -> get_name() . " is " . $obj1 -> get_color() . " color.<br>" ;
    echo $obj2 -> get_name() . " is " . $obj2 -> get_color() . " color." ;

?>