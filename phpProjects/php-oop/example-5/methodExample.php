<?php

    class Dog
    {
        public $hungry = "I am hungry";

        function eat($food)
        {
            $this -> hungry = "not so much";
        }
    }
    

    $dog = new Dog();

    echo $dog -> hungry . "<br>";

    $dog -> eat("cookie");

    echo $dog -> hungry . "<br>";

?>