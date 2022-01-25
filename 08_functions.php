<?php

// Function
function hello()
{
  echo 'Hello I am Pau';
}

hello();

// Function with argument
function helloThere($name)
{
  echo "Hello I am $name";
}

echo helloThere('Pau');

// Create sum of two functions
function sum($a, $b) 
{
  return $a + $b;
}

sum(4, 5);

// Create function to sum all numbers using ...$nums
function multiply(...$nums) 
{
  $total = 1;
  foreach ($nums as $i => $num) {
    $total *= $num;
  }
  return $total;
}

echo sum(1, 2, 3, 4, 5);

// Arrow functions
function multiplyArrow(...$nums) 
{
  return array_reduce($nums, fn($carry, $n) => $carry * $n);
}