<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><b>Client side and server side concepts</b></p>
    <script>
        document.write("Client's date  : " + Date() + "<br/>");
    </script>
    <?php

    date_default_timezone_set("Asia/Karachi");
    echo "server date is " . date("d-m-y");
    
    echo "The time is " . date("h:i:sa");
    ?>

</body>

</html>