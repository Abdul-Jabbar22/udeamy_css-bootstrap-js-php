<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Voting Eligibility</title>
</head>
<body>

<h2>Check if You Are Old Enough to Vote</h2>

<form method="post" action="">
    Enter your age: <input type="number" name="age" required>
    <input type="submit" value="Check Eligibility">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the age from the form input
    $age = $_POST['age'];

    // Use the ternary operator to check if the user is old enough to vote
    $message = ($age >= 18) ? "You are old enough to vote." : "You are not old enough to vote.";

    // Display the message
    echo "<p>$message</p>";
}
?>

</body>
</html>
