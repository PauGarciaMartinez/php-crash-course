<?php

// While
$counter = 0;

while ($counter < 10) {
  echo $counter;
  $counter++;
}

// do - while
do {
  echo $counter;
  $counter++;
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
  echo $i;
}

// foreach
$fruits = ['Banana', 'Melon', 'Apple'];

foreach ($fruits as $i => $fruit) {
  echo $i.' '.$fruit;
}

// Iterate Over associative array
$person = [
  'name' => 'Pau',
  'surname' => 'Garcia',
  'age' => 24,
  'hobbies' => ['Sport', 'Coding', 'Videogames']
];

foreach ($person as $key => $value) {
  if (is_array($value)) {
    echo $key.' '.implode(',', $value);
  } else {
    echo $key.' '.$value;
  }
}