<?php

// named arguments
function hello(string $name, $greeting = 'Hello'): void
{
  echo "$greeting, $name!";
}

function add(int | float $a, int | float $b): int | float
{
  return $a + $b;
}


// hello(greeting: 'Hi', name: 'John'); // named arguments

// hello('John', 'Hi'); // positional arguments

echo add(2, 3);
