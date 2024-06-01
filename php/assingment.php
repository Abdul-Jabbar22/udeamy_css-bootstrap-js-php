<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment Operators</title>
</head>
<body>

<?php
// Initial value assignment
$a = 10;
echo "\$a = 10 : ";
echo $a . "<br>"; // 10

// Addition assignment (+=)
$a += 5;
echo "\$a += 5 : ";
echo $a . "<br>"; // 15

// Subtraction assignment (-=)
$a -= 3;
echo "\$a -= 3 : ";
echo $a . "<br>"; // 12

// Multiplication assignment (*=)
$a *= 2;
echo "\$a *= 2 : ";
echo $a . "<br>"; // 24

// Division assignment (/=)
$a /= 4;
echo "\$a /= 4 : ";
echo $a . "<br>"; // 6

// Modulus assignment (%=)
$a %= 4;
echo "\$a %= 4 : ";
echo $a . "<br>"; // 2

// Exponentiation assignment (**=)
$a **= 3;
echo "\$a **= 3 : ";
echo $a . "<br>"; // 8

// Bitwise AND assignment (&=)
$a = 10; // Resetting $a to 10
$a &= 7;
echo "\$a &= 7 : ";
echo $a . "<br>"; // 2

// Bitwise OR assignment (|=)
$a |= 1;
echo "\$a |= 1 : ";
echo $a . "<br>"; // 3

// Bitwise XOR assignment (^=)
$a ^= 2;
echo "\$a ^= 2 : ";
echo $a . "<br>"; // 1

// Left shift assignment (<<=)
$a <<= 2;
echo "\$a <<= 2 : ";
echo $a . "<br>"; // 4

// Right shift assignment (>>=)
$a >>= 1;
echo "\$a >>= 1 : ";
echo $a . "<br>"; // 2

?>

</body>
</html>
