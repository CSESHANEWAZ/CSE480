<?php

    //define a class    
    class Fruit{
        
        //properties
        public $name;
        public $color;

        //methods
        function set_name($name){
            $this -> name = $name;
        }

        function set_color($color){
            $this -> color = $color;
        }

        function get_name(){
            return $this -> name;
        }

        function get_color(){
            return $this -> color;
        }

        //set_name() and get_name() for setting and getting the $name property

    }


    //create an object
    $obj = new Fruit();

    $obj -> name = "Apple";
    $obj -> color = "red";

    $obj -> set_name($obj -> name);
    $obj -> set_color($obj -> color);

    echo $obj -> get_name() . " is " . $obj -> get_color() . " color." ;


?>