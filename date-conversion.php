<?php

$seconds = readline("seconds: ");

$hours = (int) ($seconds / 3600);
$seconds = (int) ($seconds % 3600);
$minutes = (int) ($seconds / 60);
$seconds = (int) ($seconds % 60);

echo $hours . " " . $minutes . " " . $seconds;

echo "\n";