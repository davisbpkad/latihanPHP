<?php

for ($i = 0; $i < 5; $i++) {
  echo "Iteration $i\n";
}

$i = 1; // number
while ($i < 10) {
  echo "While loop iteration $i\n";
  $i++;
}

do {
  echo "Do-while loop iteration $i\n";
  $i++;
} while ($i < 15);

$names = ["Alice", "Bob", "Charlie"];

// foreach loop
// iterating over an indexed array
foreach ($names as $name) {
  echo "Hello, $name!\n";
}

$person = [
  "name" => "Jane Doe",
  "age" => 28,
  "city" => "New York"
];

// iterating over an associative array
foreach ($person as $key => $value) {
  echo "$key: $value\n";
}
