<?php

    class Greeting
    {
        public static function welcome()
        {
            echo "Hello World";
        }
    }
    
    Greeting :: welcome();


    //Static methods can be called directly - without creating an instance of the class first.
    //ClassName::staticMethod();

?>