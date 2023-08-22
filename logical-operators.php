<?php

$wild_kittens = true;
$kittens_with_4_legs = true;
$kittens_that_fly = false;
$Kittens_programming_with_PHP = false;


// And
var_dump($wild_kittens && $kittens_with_4_legs);
echo "<br>";

// Or
var_dump($kittens_with_4_legs || $kittens_that_fly);
echo "<br>";

// Not
var_dump(!$kittens_with_4_legs);
echo "<br>";

// Tests
$res = $kittens_with_4_legs and $Kittens_programming_with_PHP;
var_dump($res);
echo "<br>";