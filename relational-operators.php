<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// Equality comparison (==)
var_dump($a == $b);
echo "<br>";
var_dump($a == $b2);
echo "<br>";

// Identity comparison (===)
var_dump($a === $b);
echo "<br>";
var_dump($a === $b2);
echo "<br>";

// Inequality comparison (!=)
var_dump($a != $b);
echo "<br>";
var_dump($a != $b2);
echo "<br>";

// Non-identity comparison (!==)
var_dump($a !== $b);
echo "<br>";
var_dump($a !== $b2);
echo "<br>";

// Less than comparison (<)
var_dump($a < $b);
echo "<br>";
var_dump($c < $b);
echo "<br>";
var_dump($d < $b);
echo "<br>";

// Greater than comparison (>)
var_dump($a > $b);
echo "<br>";
var_dump($c > $b);
echo "<br>";
var_dump($d > $b);
echo "<br>";

// Greater than or equal comparison (>=)
var_dump($a >= $b);
echo "<br>";
var_dump($c >= $b);
echo "<br>";
var_dump($d >= $b);
echo "<br>";

// Less than or equal comparison (<=)
var_dump($a <= $b);
echo "<br>";
var_dump($c <= $b);
echo "<br>";
var_dump($d <= $b);
echo "<br>";

// Spaceship comparison (<=>)
echo "Comparison using spaceship operator:<br>";
echo 2 <=> 1;
echo "<br>";
echo 1 <=> 1;
echo "<br>";
echo 2 <=> 3;
echo "<br>";

// Null coalescing operator (??)
$age = 23;
$another_age = null;
$another_age_again = null;

echo "Null coalescing operator result: ";
echo $another_age ?? $age ?? $another_age_again;
?>