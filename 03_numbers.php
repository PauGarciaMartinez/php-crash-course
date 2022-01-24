<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// Assignment with math operators
$a += $b; echo $a . '<br>';
$a -= $b; echo $a . '<br>';
$a *= $b; echo $a . '<br>';
$a /= $b; echo $a . '<br>';
$a %= $b; echo $a . '<br>';


// Increment operator
echo $a++ . '<br>';
echo ++$a . '<br>';

// Decrement operator
echo $a-- . '<br>';
echo --$a . '<br>';

// Number checking functions
is_float(1.25) . '<br>';
is_double(1.25) . '<br>';
is_int(5) . '<br>';
is_numeric(5) . '<br>';
is_numeric("5") . '<br>';

// Conversion
$strNumber = '12.35';
$number = intval($strNumber);
var_dump($number) . '<br>';

// Number functions
echo abs(-15) . '<br>';
echo pow(-15, 4) . '<br>';
echo sqrt(-15) . '<br>';
echo max(-15) . '<br>';
echo min(-15) . '<br>';
echo round(-15) . '<br>';
echo floor(-15) . '<br>';
echo ceil(-15) . '<br>';

// Formatting numbers
$number = 12345566774.12345332;
echo number_format($number, 2, ',', '.') . '<br>';


// https://www.php.net/manual/en/ref.math.php
