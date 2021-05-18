<?php

    class Account
    {
        private $accountID;
        private $accountBalance;
        public static $count;

        public function __construct($accID, $accBal)
        {
            $this -> accountID = $accID;
            $this -> accountBalance = $accBal;
        }

        public function showInformation()
        {

        }

        public function deposit($amount)
        {

        }

        public function withdraw($amount)
        {

        }

        public function showAccountInfo()
        {

        }

        public function transferMoney($bankAccount, $amount)
        {
            
        }
    }

?>