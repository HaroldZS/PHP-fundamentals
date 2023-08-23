// Left associativity
echo 1 - 2 - 3;
echo "<br>";

$true = true;
$false = false;

$res1 = $true and $false;
var_dump($res1);
echo "<br>";
$res2 = ($true and $false);
var_dump($res2);
echo "<br>";

// Right associativity
$c = 10;
$a = $b = $c;
echo "$a $b $c";
echo "<br>";

$counter = 1;
$result = $counter++;
echo $result;
echo "<br>";