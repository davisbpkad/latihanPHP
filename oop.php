<?php

// aturan penulisan nama class
// nama class diawali dengan huruf kapital
// nama class menggunakan PascalCase
// singular
class Person
{
  static $availableGenders = ['Male', 'Female'];

  // properties/attributes
  public $name;

  public $dateOfBith;

  public $gender;

  // constructor
  // special method that is called when an object is created
  public function __construct($nama, $tanggalLahir, $jenisKelamin)
  {
    $this->name = $nama;
    $this->dateOfBith = $tanggalLahir;
    $this->gender = $jenisKelamin;
    echo "A new person object has been created.\n";
  }

  // instance methods/functions
  function eat()
  {
    echo "Eating...";
  }

  static function eatStatic()
  {
    echo "Eating...";
  }
}

// static called from class
print_r(Person::$availableGenders);


// $person  = new Person("Jane Doe", '1990-10-10', 'Male'); // instantiation
$person = new Person(nama: "Jane Doe", tanggalLahir: '1990-10-10', jenisKelamin: 'Male');
$person->name = "John Doe"; // dynamic property assignment
// $person->name = "John Doe";
// $person->dateOfBith = "1990-01-01";
// $person->gender = 'Male';


print_r($person);

// $person->eat();
Person::eatStatic();
