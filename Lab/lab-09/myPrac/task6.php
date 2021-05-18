<?php

    class Account
    {
        private $accountID;
        private $accountBalance;
        public static $count=0;

        public function __construct($accID, $accBal)
        {
            $this -> accountID = $accID;
            $this -> accountBalance = $accBal;
            Account :: $count++;
        }

        public function showInformation()
        {
            echo "Account ID: " . $this -> accountID . "</br>";
            echo "Balance: " . $this -> accountBalance . "</br>";
        }

        public function deposit($amount)
        {
            $this -> accountBalance += $amount;
            echo "After deposit {$amount}$, the total balance is= {$this->accountBalance}.</br>";
        }

        public function withdraw($amount)
        {
            $this -> accountBalance -= $amount;
            echo "After withdraw {$amount}$, the total balance is= {$this->accountBalance}. </br>";
        }

        public function showAccountInfo()
        {

        }


        public function transferMoney($bankAccount, $amount)
        {
            if ($this -> accountID != $bankAccount) {
                $this -> accountBalance -= $amount;

                echo "After transfer {$amount}$ to Account Id: {$bankAccount}, 
                the total balance is= {$this->accountBalance}. </br>";
            }

            elseif ($this -> accountID == $bankAccount) {
                $this -> accountBalance += $amount;

                echo "After deposit {$amount}$, 
                the total balance is= {$this->accountBalance}. </br>";
            }
        }
    }


    $obj1 = new Account(10110113445, 3000);
    $obj2 = new Account(10110233543, 5000);
    $obj3 = new Account(10112356734, 8000);
    $obj4 = new Account(10112356789, 15000);

    $obj1 -> showInformation();
    $obj1 -> deposit(4000);
    $obj1 -> withdraw(2000);
    $obj1 -> transferMoney(10110233543, 2000);
    

    echo "</br>";
    $obj2 -> showInformation();
    $obj2 -> deposit(8000);
    $obj2 -> withdraw(5000);
    $obj2 -> transferMoney(10110233543, 2000);


    echo "</br>";
    $obj3 -> showInformation();
    $obj3 -> deposit(15000);
    $obj3 -> withdraw(10000);


    echo "</br>";
    $obj4 -> showInformation();
    $obj4 -> deposit(15000);
    $obj4 -> withdraw(10000);


    echo "</br>";
    echo "Number of created accounts= " . Account :: $count . ".</br>"



?>