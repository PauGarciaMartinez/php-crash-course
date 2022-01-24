<?php

// Create array
$fruits = ['Banana', 'Apple', 'Orange'];
$fruits2 = array();

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1].'<br';

// Set element by index
$fruits[0] = 'Peach';

// Check if array has element at index 2
isset($fruits[2]);

// Append element
$fruits[] = 'Banana';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'Melon');

// Remove element from the end of the array
echo array_pop($fruits, 'Melon').'<br>';

// Add element at the beginning of the array
array_unshift($fruits, 'Melon');

// Remove element from the beginning of the array
echo array_shift($fruits, 'Melon');

// Split the string into an array
$string = "Banana,Apple,Peach";
explode(",", $string);

// Combine array elements into string
implode("&", $fruits);

// Check if element exist in the array
in_array('Apple', $fruits);

// Search element index in the array
array_search('Mango', $fruits);

// Merge two arrays
$vegetables = ['Boniato', 'Cucumber'];
array_merge($fruits, $vegetables);
$all = [...$fruits, ...$vegetables];

// Sorting of array (Reverse order also)
sort($fruits);
rsort($fruits);


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
  'name' => 'Pau',
  'surname' => 'Garcia',
  'age' => 24,
  'hobbies' => ['Sport', 'Coding', 'Videogames']
];

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['name'] = 'Lo_Bandit';

// Null coalescing assignment operator. Since PHP 7.4
if (isset($person['adress'])) {
  $person['adress'] = 'unknown';
}
$person['adress'] ??= 'unknown';

// Check if array has specific key

// Print the keys of the array
array_keys($person);

// Print the values of the array
array_values($person);

// Sorting associative arrays by values, by keys
ksort($person);
asort($person);

// Two dimensional arrays
