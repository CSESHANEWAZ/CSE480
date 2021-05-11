<?php

    class Circle
    {
        private $radius;

        public function setRadius($val)
        {
            $this -> radius = $val;
        }

        public function get_area()
        {
            return 3.1415 * ($this->radius * $this->radius);        // area = pi * r * r
        }

        public function get_circumference()
        {
            return 2 * 3.1415 * $this->radius;                  //circumference = 2 * pi * r
        }
    }


    $obj1 = new Circle;

    $obj1 -> setRadius(15);

    
    echo "Area of circle= " . $obj1 -> get_area() . "</br>";
    echo "Circumference of circle= " . $obj1 -> get_circumference() . "</br>";

?>