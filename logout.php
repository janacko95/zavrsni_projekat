<!DOCTYPE html>
<html lang="en">
<?php

session_start();


$_SESSION = array();


session_destroy();


header("location: login.php");
exit;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>