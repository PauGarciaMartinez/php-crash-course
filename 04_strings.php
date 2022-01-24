<?php

// Create simple string and concatenation
$name = 'Pau';
$string = 'Hello I am' . $name . ' and I am 24';
$string2 = "Hello Universe, I am $name";
echo $string . '<br>';
echo $string2 . '<br>';

// String functions
echo "1 - " . strlen($string) . '<br>';
echo "1 - " . trim($string) . '<br>';
echo "1 - " . ltrim($string) . '<br>';
echo "1 - " . rtrim($string) . '<br>';
echo "1 - " . str_word_count($string) . '<br>';
echo "1 - " . strrev($string) . '<br>';
echo "1 - " . strtoupper($string) . '<br>';
echo "1 - " . strtolower($string) . '<br>';
echo "1 - " . ucfirst($string) . '<br>';
echo "1 - " . lcfirst($string) . '<br>';
echo "1 - " . ucwords($string) . '<br>';
echo "1 - " . strpos($string, 'world') . '<br>';
echo "1 - " . stripos($string, 'world') . '<br>';
echo "1 - " . substr($string, 2) . '<br>';
echo "1 - " . str_replace('world', 'moon', $string) . '<br>';
echo "1 - " . str_ireplace('world', 'moon', $string) . '<br>';

// Multiline text and line breaks
$longText = "
  Hello, 
  my name is <b>Pau</b>
  I like <b>pizza</b>
";
echo $longText . '<br>';
echo nl2br($longText) . '<br>';
echo htmlentities($longText) . '<br>';
echo nl2br(htmlentities($longText)) . '<br>';
echo nl2br(htmlentities($longText)) . '<br>';

// https://www.php.net/manual/en/ref.strings.php