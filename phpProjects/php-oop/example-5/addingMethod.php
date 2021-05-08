<?php

    class Member
    {
        public $username = "";
        private $loggedIn = false;

        //service methods
        //mutator methods
        public function login(){
            $this -> loggedIn = true;
        }

        public function logout(){
            $this -> loggedIn = false;
        }


        //accessor methods
        public function isLoggedIn(){
            return $this -> loggedIn;
        }
    }


    //create an object
    $member = new Member();

    $member -> username = "Fred";

    echo $member -> username . " is " . ($member -> isLoggedIn() ? " logged in " : " logged out ") . "<br>";

    $member -> login();
    echo $member -> username . " is " . ($member -> isLoggedIn() ? " logged in " : " logged out ") . "<br>";

    $member -> logout();
    echo $member -> username . " is " . ($member -> isLoggedIn() ? " logged in " : " logged out ") . "<br>";

?>