<?php

    class Rectangle
    {
        private $width;
        private $height;

        
        //mutator method
        public function setWidth($w)
        {
            $this -> width = $w;
        }
        public function setHeight($h)
        {
            $this -> height = $h;
        }


        //accessor method
        public function getWidth()
        {
            return $this -> width;
        }
        public function getHeight()
        {
            return $this -> height;
        }

        
        //show output
        public function showArea()
        {
            
            echo "Area, a = w*l = " . ($this -> width * $this -> height) . "</br>";
        }
    }

    $obj1 = new Rectangle;
    $obj2 = new Rectangle;

    $obj1 -> setWidth(10);
    $obj1 -> setHeight(5);

    $obj2 -> setWidth(20);
    $obj2 -> setHeight(5);

    $obj1 -> showArea();
    $obj2 -> showArea()

?>
