<?php

    class Mathematics
    {
        //properties
        public $num;


        //methods
        public function addTwo()
        {
            return $this -> num + 2;
        }
    }

    //create an object
    $math = new Mathematics();

    $math -> num = 2;
    echo "Output: " . $math -> addTwo();

?>