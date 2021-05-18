<?php

    class Greeting
    {
        //static method
        public static function welcome()
        {
            echo "Hello World";
        }

        //constructor
        public function __construct()
        {
            self :: welcome();
        }

    }

    new Greeting();


    //A class can have both static and non-static methods. 
    //A static method can be accessed from a method in the same class using the self keyword and double colon (::)

?>