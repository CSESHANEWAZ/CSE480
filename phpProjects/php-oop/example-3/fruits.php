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
    $obj1 = new Fruit();
    $obj2 = new Fruit();

    $obj1 -> name = "Apple";
    $obj1 -> color = "red";

    $obj2 -> name = "Banana";
    $obj2 -> color = "yellow";

    $obj1 -> set_name($obj1 -> name);
    $obj1 -> set_color($obj1 -> color);

    $obj2 -> set_name($obj2 -> name);
    $obj2 -> set_color($obj2 -> color);



    echo $obj1 -> get_name() . " is " . $obj1 -> get_color() . " color.<br>" ;
    echo $obj2 -> get_name() . " is " . $obj2 -> get_color() . " color." ;

?>