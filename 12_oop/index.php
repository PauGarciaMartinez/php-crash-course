<?php

require_once "person.php";
require_once "student.php";

$me = new Person('Pau', 'Garcia');
$me->setAge(24);
echo Person::$counter;

$you = new Student('Lucía', 'Vélez', 344532);
