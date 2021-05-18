<?php

    class Factorial
    {
        //properties
        private $result = 1;
        private $number;

        //constructor
        function __construct($num)
        {
            $this -> number = $num;

            for ($i=2; $i <= $num ; $i++) { 
                
                $this -> result *= $i;
            }

            echo "constructor executed. </br>";
        }

        //method
        public function showResult()
        {
            echo "Factorial of {$this->number} is {$this->result}.</br>";
        }

        //destructor
        function __destruct()
        {
            echo "I'm about to disappear - bye bye!";
        }
    }

    $obj1 = new Factorial(5);

    $obj1 -> showResult();


?>