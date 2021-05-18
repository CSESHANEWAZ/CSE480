<?php

    //parent class    
    class Pi
    {
        //static property
        public static $value = 3.1416;
    }


    //child class
    class X extends Pi
    {
        public function staticValue()
        {
            return parent :: $value;
        }
    }

    $obj1 = new X();

    echo $obj1 -> staticValue();

?>