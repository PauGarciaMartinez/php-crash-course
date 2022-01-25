<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
  echo '1';
}

// Without circle braces
if ($age === 20) echo '1';

// Sample if-else
if ($age > 20) {
  echo '1';
} else {
  echo '2';
}

// Difference between == and ===
if ($age == 20) {
  echo '1';
}

if ($age === '20') {
  echo '2';
}

// if AND
if ($age > 20 && $salary === 300000) {
  echo 'Good money man';
}

// if OR
if ($age > 20 || $salary === 300000) {
  echo 'Good money man';
}

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age ?: '18';

// Null coalescing operator
isset($name) ? $name : 'John';
$name ?? 'John';

// switch
$userRole = 'admin';
switch ($userRole) {
  case 'admin':
    echo 'admin';
    break;
  case 'editor':
    echo 'editor';
    break;
  case 'user';
    echo 'user';
    break;
  default:
    echo 'Invalid role';
}