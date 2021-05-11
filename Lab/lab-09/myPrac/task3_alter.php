<?php

    class Student
    {
        private $name;
        private $id;
        private $cgpa;


        //mutator method
        public function set_name($name)
        {
            $this -> name = $name;
        }
        public function set_id($id)
        {
            $this -> id = $id;
        }
        public function set_cgpa($cgpa)
        {
            $this -> cgpa = $cgpa;
        }

        //accessor method
        public function get_info()
        {
            echo "Name: " . $this-> name . "</br>";
            echo "ID: " . $this -> id . "</br>";
            echo "CGPA: " . $this -> cgpa . "</br>";
        }

        public function get_cgpa()
        {
            return $this -> cgpa;
        }
    }


    //create objects
    $obj1 = new Student;
    $obj2 = new Student;

    echo "<h2>Student Info:</h2> </br>";

    echo "Student-1 => </br>";
    $obj1 -> set_name("Berlin");
    $obj1 -> set_id("2016-3-60-030");
    $obj1 -> set_cgpa(3.85); 

    $obj1 -> get_info();

    echo "</br>";

    echo "Student-2 => </br>";
    $obj2 -> set_name("Tokyo");
    $obj2 -> set_id("2016-3-60-055");
    $obj2 -> set_cgpa(3.55); 

    $obj2 -> get_info();

    echo "</br>";

    $total_cgpa = $obj1 -> get_cgpa() + $obj2 -> get_cgpa();
    $avg_cgpa = $total_cgpa / 2;

    echo "Average cgpa = " . $avg_cgpa. "</br>";
?>