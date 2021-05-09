<?php

    class Member
    {
        private $username;
        private $location;
        private $homepage;

        //constructor method
        public function __construct($un, $lc, $hp)
        {
            $this -> username = $un;
            $this -> location = $lc;
            $this -> homepage = $hp;
        }

        public function get_profile()
        {
            echo "<b>Username:</b> " . $this -> username . "<br>";
            echo "<b>Location:</b> " . $this -> location . "<br>";
            echo "<b>Url: </b> <a href= $this->homepage> $this->homepage </a> </br>"; 
        }

    }

    //create an object
    $member = new Member("cseshanewaz", "Chittagong", "https://cseshanewaz.me");

    $member -> get_profile();

?>