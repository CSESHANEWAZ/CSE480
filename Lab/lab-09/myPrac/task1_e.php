<?php

    class Rectangle
    {
        private $width;
        private $height;


        //constructor function
        function __construct($w, $h)
        {
            $this -> width = $w;
            $this -> height = $h;
        }

        
        //show output
        public function showArea()
        {
            echo "Area, a = w*l = " . ($this -> width * $this -> height) . "</br>";
        }
    }

    $obj1 = new Rectangle(25, 5);
    $obj2 = new Rectangle(10, 8);


    $obj1 -> showArea();
    $obj2 -> showArea()


?>