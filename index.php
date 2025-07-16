<?php

// constants
const PI = 3.14159; // constant

// variables
$name = "John Doe"; // string
$age = 30; // number
$height = 175.4; // float
$isMarried = true; // boolean
$money = null; // null

$age = '30';

// indexed array
$hobbies = ["reading", "traveling", "gaming"]; // array
// $hobbies = array("reading", "traveling", "gaming"); // alternative array syntax
// echo $hobbies[1];

// associative array
$person = [
  "name" => "Jane Doe",
  "age" => 28,
  "city" => "New York"
];

// echo $person["name"];

// multi-dimensional array
$contacts = [
  "friends" => [
    ["name" => "Alice", "phone" => "123-456-7890"],
    ["name" => "Bob", "phone" => "987-654-3210"]
  ],
  "family" => [
    ["name" => "Charlie", "phone" => "555-555-5555"],
    ["name" => "Diana", "phone" => "444-444-4444"]
  ]
];

// echo $contacts['family'][0]['phone'];
print_r($contacts);

// echo "Hello, my name is $name and I am $age years old.";

// object (dynamic properties)
$personObject = new stdClass(); // instantiation
$personObject->name = "Alice"; // personObject.name
$personObject->age = 25;
$personObject->city = "Los Angeles";

print_r($personObject->address);

// oprations
// arithmetic operations
$sum = 10 + 5; // addition
$difference = 10 - 5; // subtraction
$product = 10 * 5; // multiplication
$quotient = 10 / 5; // division
$remainder = 10 % 3; // modulus
$power = 2 ** 3; // 2 raised to the power of 3  

// assignment operations
$x = 10; // assignment
$x += 5; // equivalent to $x = $x + 5; (addition assignment)
$x -= 3; // equivalent to $x = $x - 3; (subtraction assignment)
$x *= 2; // equivalent to $x = $x * 2; (multiplication assignment)
$x /= 4; // equivalent to $x = $x / 4; (division assignment)
$x %= 3; // equivalent to $x = $x % 3; (modulus assignment)
$x **= 2; // equivalent to $x = $x ** 2; (exponentiation assignment)

// comparison operations
$isEqual = (10 == 10); // equal
$isNotEqual = (10 != 5); // not equal
$isIdentical = (10 === 10); // identical (same value and type)
$isNotIdentical = (10 !== "10"); // not identical (different type)
$isGreater = (10 > 5); // greater than
$isLess = (5 < 10); // less than
$isGreaterOrEqual = (10 >= 10); // greater than or equal to
$isLessOrEqual = (5 <= 10); // less than or equal to

// logical operations
$and = (true && false); // logical AND
$or = (true || false); // logical OR
$not = !true; // logical NOT

// string operations
$greeting = "Hello, " . $name; // concatenation //  "Hello" + " John Doe"
// $length = strlen($greeting); // string length
// $upperCase = strtoupper($greeting); // convert to uppercase
// $lowerCase = strtolower($greeting); // convert to lowercase
// $substring = substr($greeting, 0, 5); // get substring
// $replaced = str_replace("John", "Jane", $greeting); // replace substring

echo PI;
echo $personObject->address;
