<?php

    class Box
    {
        private $length;
        private $width;
        private $height;
        
        private $area;

        function __construct($le, $wi, $he)
        {
            $this -> length = $le;
            $this -> width = $wi;
            $this -> height = $he;
        }

        public function getArea()
        {
            //SA = 2*l*w + 2*l*h + 2*h*w

            return $this -> area = (2 * $this->length * $this->width) + (2 * $this->length * $this->height)
            + (2 * $this->height * $this->width);
        }
    }


    //create object
    $obj1 = new Box(5.55, 4.60, 8.50);
    $obj2 = new Box(3.33, 5.55, 8.88);

    echo "Surface Area of a Box1, SA= " . $obj1 -> getArea() . "</br>";
    echo "Surface Area of a Box2, SA= " . $obj2 -> getArea() . "</br>";

?>