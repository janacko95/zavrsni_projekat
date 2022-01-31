<?php

session_start();

require_once('./createDB.php');
require_once('./proizvod.php');



$database = new CreateDb("odeca", "collection");

if (isset($_POST['add'])) {

    if (isset($_SESSION['cart'])) {

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = './newcollection.php'</script>";
        } else {

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }
    } else {

        $item_array = array(
            'product_id' => $_POST['product_id']
        );


        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/newcollection.css">


    <title>Document</title>
</head>

<body>



    <?php
    include('navbarproba.php')
    ?>

    <div class="flitriranje">
        <?php
        include('filtriranje.php')

        ?>
    </div>

    <div class="kartice">
        <?php
        $result = $database->getNewCollection();
        while ($row = mysqli_fetch_assoc($result)) {
            componentNewCollection($row['name'], $row['cena'], $row['slika'], $row['product_id'], $row['tekst'], $row['vrsta']);
        }
        ?>
    </div>

    <?php include('pagination.php') ?>
</body>

</html>