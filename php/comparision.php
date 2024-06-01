<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Comparison Operators</title>
</head>
<body>

<?php
$a = 5;
$b = '5';
$c = 10;

// Equal (==)
echo "\$a == \$b : ";
var_dump($a == $b); // true

// Identical (===)
echo "<br>\$a === \$b : ";
var_dump($a === $b); // false

// Not Equal (!=)
echo "<br>\$a != \$c : ";
var_dump($a != $c); // true

// Not Equal (<>)
echo "<br>\$a <> \$c : ";
var_dump($a <> $c); // true

// Not Identical (!==)
echo "<br>\$a !== \$b : ";
var_dump($a !== $b); // true

// Less Than (<)
echo "<br>\$a < \$c : ";
var_dump($a < $c); // true

// Greater Than (>)
echo "<br>\$a > \$c : ";
var_dump($a > $c); // false

// Less Than or Equal To (<=)
echo "<br>\$a <= \$b : ";
var_dump($a <= $b); // true

// Greater Than or Equal To (>=)
echo "<br>\$a >= \$b : ";
var_dump($a >= $b); // true

// Spaceship Operator (<=>)
echo "<br>\$a <=> \$c : ";
var_dump($a <=> $c); // -1 (a is less than c)

echo "<br>\$c <=> \$b : ";
var_dump($c <=> $b); // 1 (c is greater than b)

echo "<br>\$a <=> \$b : ";
var_dump($a <=> $b); // 0 (a is equal to b)

?>

</body>
</html>
