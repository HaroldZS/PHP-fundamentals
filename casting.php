<?php

$num = "5";

var_dump($num);

echo "<br>";

$num = (int) $num;

var_dump($num);

echo "<br>";

$days = 5.89;

var_dump($days);
$days = (int) $days;

echo "<br>";

$flag = 1;

$flag = (bool) $flag;

var_dump($flag);

echo "<br>";

$num_questions = 5 + "5";
var_dump($num_questions);
echo "<br>";

$num_answers = "5" + 5;
var_dump($num_answers);
echo "<br>";

$max_average = $num_answers / 1.0;
var_dump($max_average);
echo "<br>";

$kittens = 3 + strval("5");
var_dump($kittens);
echo "<br>";