<?php

    class Welcome
    {
        public static $var = "Hello World";
    }
    
    echo Welcome :: $var;


    //static properties can be called directly - 
    //without creating an instance (object) of a class.

?>