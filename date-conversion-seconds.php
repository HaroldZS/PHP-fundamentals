<?php

$hours = readline("hours: ");
$minutes = readline("minutes: ");
$seconds = readline("seconds: ");

$total = $hours * 3600 + $minutes * 60 + $seconds;

echo $total;

echo "\n";