<?php

    class Student
    {
        private $name;
        private $id;
        private $cgpa;
        private $total_cgpa;
        private $avg_cgpa;

        function __construct($name, $id, $cgpa)
        {
            $this -> name = $name;
            $this -> id = $id;
            $this -> cgpa = $cgpa;
        }

        public function show_info()
        {
            echo "Name: " . $this-> name . "</br>";
            echo "ID: " . $this -> id . "</br>";
            echo "CGPA: " . $this -> cgpa . "</br>";
        }

        public function get_avg($cgpa1, $cgpa2)
        {
            $this -> total_cgpa = $cgpa1 + $cgpa2;
            $this -> avg_cgpa = ($this -> total_cgpa) / 2;
            echo "Average cgpa = " . $this -> avg_cgpa . "</br>";
        }
    }


    //create objects
    $obj1 = new Student("Amal Chamlee", "2016-3-60-030", 3.65);
    $obj2 = new Student("David Byer", "2018-3-60-044", 3.85);

    echo "<h2>Student Info:</h2> </br>";

    echo "Student-1 => </br>";
    $obj1 -> show_info();

    echo "</br>";

    echo "Student-2 => </br>";
    $obj2 -> show_info();

    echo "</br>";
    $obj1 -> get_avg(3.65, 3.85);
?>