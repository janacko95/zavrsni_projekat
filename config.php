<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "odeca");

    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    ?>
</body>

</html>