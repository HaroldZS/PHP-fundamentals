<?php

$seconds = 7200;
$result = 0;

// Calculate and echo the result of 5 + 5
$result = 5 + 5;
echo "Result of 5 + 5: " . $result;
echo "<br>";

// Calculate and store the result of 5 - 3 in the variable $resultado, then echo it
$result = 5 - 3;
echo "Result of 5 - 3: " . $result;
echo "<br>";

// Calculate and echo the result of 5 raised to the power of 3
$result = 5 ** 3;
echo "Result of 5 ** 3: " . $result;
echo "<br>";

// Calculate and echo the result of (5 * 6) concatenated with (80 / 4)
$result = (5 * 6) . " " . (80 / 4);
echo "Result of (5 * 6) concatenated with (80 / 4): " . $result;
echo "<br>";

// Calculate and echo the remainder of 5 divided by 2
$result = 5 % 2;
echo "Remainder of 5 / 2: " . $result;
echo "<br>";

// Calculate and echo the result of 5 divided by 2
$result = 5 / 2;
echo "Result of 5 / 2: " . $result;
echo "<br>";

// Calculate hours from seconds and echo the result
$hours = $seconds / 3600;
$result = $seconds / 3600;
echo "Hours in $seconds seconds: " . $result;
echo "<br>";

// Calculate the remainder of seconds divided by 3600 and echo it
$result = $seconds % 3600;
echo "Remaining seconds after calculating hours: " . $result;
echo "<br>";