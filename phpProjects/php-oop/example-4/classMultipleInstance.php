<?php

    class MyClass
    {
        //property
        public $prop1 = "I am a class property";

        //mutator method
        public function setProperty($newval){
            $this -> prop1 = $newval;
        }

        //accessor method
        public function getProperty(){
            return $this -> prop1 . "<br>";
        }
    }

    //create objects
    $obj1 = new MyClass;
    $obj2 = new MyClass;

    //get the value of prop1 from both object
    echo $obj1 -> getProperty();
    echo $obj2 -> getProperty();

    //set new values for both object
    $obj1 -> setProperty("I am a new property value..!");
    $obj2 -> setProperty("I belong to the second instance....!!");


    //get the update values of prop1 from both object
    echo $obj1 -> getProperty();
    echo $obj2 -> getProperty();

?>