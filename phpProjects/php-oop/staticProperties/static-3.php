<?php

    class Pi
    {
        //static property
        public static $value = 3.1416;

        //method
        public function staticValue()
        {
            return self :: $value;
        }
    }

    $obj1 = new Pi();

    echo $obj1 -> staticValue();



    //A class can have both static and non-static properties. 
    //A static property can be accessed from a method in the same class 
    //using the self keyword and double colon (::)

?>