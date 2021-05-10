<?php

class Account {
	private $accountId;
	private $accountBalance;
	public static $count=0;//$count=1,2,3....;

	public function __construct($accountId, $accountBalance) {
		$this->accountId = $accountId;
		$this->accountBalance = $accountBalance;
		Account::$count++;
	}

	public function showInformation() {
		echo "Account Id: $this->accountId". "</br>";
		echo "Account Balance: $this->accountBalance". "</br>";
	}

	public function deposit($amount) {
		$this->accountBalance = $this->accountBalance + $amount;
	}

	public function withdraw($amount) {
		$this->accountBalance = $this->accountBalance - $amount;
	}

	public function transferMoney($account, $amount) {
		$this->accountBalance = $this->accountBalance - $amount;
		$account->accountBalance = $account->accountBalance + $amount;
	}
}

print "Number of created account: " . Account::$count . "<br>";

?>