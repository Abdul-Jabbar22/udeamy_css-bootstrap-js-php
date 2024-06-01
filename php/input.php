<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
    Enter length: <input type="number" name="length" required>
    <br>
    Enter breadth: <input type="number" name="breadth" required>
    <br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['length'];
    $b = $_POST['breadth'];

    $c = $a * $b;

    echo "Area = " . $c;
}
?>

</body>
</html>
