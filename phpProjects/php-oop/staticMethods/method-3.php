<?php

    class Greeting
    {
        public static function welcome()
        {
            echo "Hello World";
        }
    }

    class SomeOtherClass
    {
        public function message()
        {
            Greeting :: welcome();
        }
    }

    $obj1 = new SomeOtherClass();

    $obj1 -> message();

?>