<?php

    class Mathematics
    {
        //properties
        private $num;

        //mutator method
        public function set_num($n){
            $this -> num = $n;
        }


        //accessor methods
        public function addTwo()
        {
            return $this -> num + 2;
        }
    }

    //create an object
    $math = new Mathematics();

    $math -> set_num(2);
    
    echo "Output: " . $math -> addTwo();

?>