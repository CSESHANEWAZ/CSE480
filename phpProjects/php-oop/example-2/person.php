<?php

    class Person{
        //data members
        private $Firstname = "Napoleon";
        private $Lastname = "Reyes";

        //methods
        function getFirstname(){
            return $this -> Firstname;
        }

        function getLastname(){
            return $this -> Lastname;
        }
    }



    //create an object of type Person
    $obj = new Person();

    echo "<p> Firstname: " . $obj -> getFirstname() . "</p>";
    echo "<p> Lastname: " . $obj -> getLastname() . "</p>";

?>