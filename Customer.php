<?php

class Customer
{
  // properties/attributes
  private $balance = 0; // default value

  // protected

  // constructor
  public function __construct(
    public string $name,
    public string $email,
    public string $phone
  ) {}

  // method to display customer information
  public function displayInfo()
  {
    echo "Customer Name: " . $this->name . "\n";
    echo "Email: " . $this->email . "\n";
    echo "Phone: " . $this->phone . "\n";
    echo "Balance: " . $this->balance . "\n";
  }

  // setter for balance / mutator
  public function addBalance(int | float $amount)
  {
    if ($amount <= 0) {
      throw new Exception("Amount must be greater than zero.");
    }

    $this->balance += $amount;
  }

  // getter for balance / accessor
  public function getBalance()
  {
    return 'Rp.' . $this->balance - 50;
  }

  // magic methods to handle dynamic properties / private properties
  public function __get($name)
  {
    if ($name == 'balance') {
      return $this->getBalance();
    }

    return null;
  }

  // magic method to set dynamic properties / private properties
  public function __set($name, $value)
  {
    if ($name == 'balance') {
      $this->balance = $value;
    }
  }

  public function __destruct()
  {
    echo "Customer object for {$this->name} is being destroyed.\n";
  }

  public function __toString()
  {
    return "Customer: {$this->name}, Email: {$this->email}, Phone: {$this->phone}, Balance: {$this->getBalance()}";
  }
}

$budi = new Customer("Budi", "budi@mail.com", '07676765');
// $budi->addBalance(1000);
$budi->balance = 500;
echo $budi->balance;
echo "\n";
echo $budi;
