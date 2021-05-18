namespace Bank;

abstract class Client
{
  protected $numMoney;
  protected $accounts = [];

  public function __construct($numMoney)
  {
    $this->numMoney = $numMoney; 
  }

  public function addNumMoney($ammount)
  {
    $this->numMoney += $ammount;
  }

  public function substractNumMoney($ammount)
  {
    $this->numMoney -= $ammount;
  }

  public function getNumMoney() : float
  {
    return $this->numMoney;
  }

  public function openNewAccount($name)
  {
    $newAccount = new Account($this, $name);
    array_push($this->accounts, $newAccount);
  }

  public function closeAccount($account)
  {
    if (in_array($account, $this->accounts)) {
      $account->withdrawMoney($account->getNumMoney());
      $this->deleteFromAccounts($account);
    }
  }

  private function deleteFromAccounts($account)
  {
    if (in_array($account, $this->accounts)) {
      unset($this->accounts[array_search($account, $this->accounts)]);
    }
  }

  public function getAccount($name) : Account
  {
    foreach ($this->accounts as $account) {
      if ($account->getName() === $name) {
        return $account;
      }
    }
    return null;
  }

}

class Company extends Client
{
  private $name;
  private $ein;

  public function __construct($name, $ein, $numMoney)
  {
    $this->name = $name;
    $this->ein = $ein;
    parent::__construct($numMoney);
  }

  public function getName() : string
  {
   return $this->name;
  }
}

class NaturalPerson extends Client
{
  private $firstName;
  private $lastName;
  private $ssn;

  public function __construct($firstName, $lastName, $ssn, $numMoney)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->ssn = $ssn;
    parent::__construct($numMoney);
  }

  public function getName() : string
  {
   return $this->firstName . ' ' . $this->lastName;
  }

}

class Account
{
  private $client;
  private $name;
  private $numMoney = 0;
  private $debt;
  private $history = [];

  public function __construct($client, $name)
  {
    $this->client = $client;
    $this->name = $name;
  }

  public function getName() : string
  {
    return $this->name;
  }

  public function getNumMoney() : float
  {
    return $this->numMoney;
  }

  public function getHistory() : array
  {
    return $this->history;
  }

  public function addNumMoney($ammount)
  {
    $this->numMoney += $ammount;
  }

  public function substractNumMoney($ammount)
  {
    $this->numMoney -= $ammount;
  }

  public function depositMoney($ammount)
  {
    if ($this->client->getNumMoney() < $ammount) {
      return;
    }

    $this->addNumMoney($ammount);
    $this->client->substractNumMoney($ammount);

    $this->addAccountOperationLogToHistory('Deposition', 'Today', $ammount, $this->numMoney);
  }

  public function withdrawMoney($ammount)
  {
    if ($this->numMoney < $ammount) {
      return;
    }
    $this->substractNumMoney($ammount);
    $this->client->addNumMoney($ammount);

    $this->addAccountOperationLogToHistory('Withdraw', 'Today', $ammount, $this->numMoney);
  }

  public function addAccountOperationLogToHistory($type, $date, $ammount, $moneyAfter)
  {
    $operationLog = new AccountOperationLog(...func_get_args());
    array_push($this->history, $operationLog);
  }

  public function addTransferLogToHistory($type, $name, $date, $ammount, $moneyAfter, $sender, $beneficiary)
  {
    $operationLog = new TransferLog(...func_get_args());
    array_push($this->history, $operationLog);
  }

  public function transferMoney($account, $title, $ammount)
  {
    if ($this->numMoney < $ammount) {
      return;
    }

    $this->substractNumMoney($ammount);
    $account->addNumMoney($ammount);

    $this->addTransferLogToHistory('Transfer', $title, 'today', $ammount, $this->numMoney, $account->client->getName(), $this->client->getName());
    $account->addTransferLogToHistory('Transfer', $title, 'today', $ammount, $account->getNumMoney(), $this->client->getName(), $account->client->getName());

  }

}

class AccountOperationLog
{
  private $type;
  private $date;
  private $ammount;
  private $numMoneyAfter;

  public function __construct($type, $date, $ammount, $numMoneyAfter)
  {
    $this->type = $type;
    $this->date = $date;
    $this->ammount = $ammount;
    $this->numMoneyAfter = $numMoneyAfter;
  }

  private function saveToDB()
  {
    // Implement later
  }
}

class TransferLog extends AccountOperationLog
{
  private $title;
  private $sender;
  private $beneficiary;

  public function __construct($type, $title, $date, $ammount, $numMoneyAfter, $sender, $beneficiary)
  {
    parent::__construct($type, $date, $ammount, $numMoneyAfter);
    $this->title = $title;
    $this->sender = $sender;
    $this->beneficiary = $beneficiary;
  }
}