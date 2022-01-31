<!DOCTYPE html>
<html lang="en">
!DOCTYPE html>
<html lang="en">
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
            echo "<script>window.location = './woman.php'</script>";
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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./navbarproba.php">
    <title>Document</title>

</head>

<body>
    <div class="navigacija">
        <?php

        include('navbarproba.php')
        ?>
    </div>

    <div class="slideshow">
        <div class="slideshow-item">
            <img src="./slike/pozadina.jfif" alt="">
            <div class="slideshow-item-text">
                <h5>Donatella versace</h5>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, sit. Animi quam deleniti dolorum.
                    <br>Quidem dicta omnis sed eius similique minus necessitatibus ut quam aut, esse accusantium rem impedit non?<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sequi quis mollitia eveniet repudiandae excepturi amet.
                    <br>Eveniet dolorem nemo voluptate? Sapiente numquam voluptates autem delectus deserunt exercitationem eius repellendus quisquam?
                </p>
            </div>
        </div>

        <div class="slideshow-item">
            <img src="./slike/pozadina5.jpg" alt="">
            <div class="slideshow-item-text">
                <h5>Coco chanel</h5>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, sit. Animi quam deleniti dolorum.
                    <br>Quidem dicta omnis sed eius similique minus necessitatibus ut quam aut, esse accusantium rem impedit non?<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sequi quis mollitia eveniet repudiandae excepturi amet.
                    <br>Eveniet dolorem nemo voluptate? Sapiente numquam voluptates autem delectus deserunt exercitationem eius repellendus quisquam?
                </p>
            </div>
        </div>


        <div class="slideshow-item">
            <img src="./slike/pozadina3.jpeg" alt="">
            <div class="slideshow-item-text">
                <h5>Uros milovanovic</h5>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, sit. Animi quam deleniti dolorum.
                    <br>Quidem dicta omnis sed eius similique minus necessitatibus ut quam aut, esse accusantium rem impedit non?<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sequi quis mollitia eveniet repudiandae excepturi amet.
                    <br>Eveniet dolorem nemo voluptate? Sapiente numquam voluptates autem delectus deserunt exercitationem eius repellendus quisquam?
                </p>
            </div>
        </div>

        <div class="slideshow-item">
            <img src="./slike/pozadina2.jpeg" alt="">
            <div class="slideshow-item-text">
                <h5>Kristina Ljubenkovic</h5>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, sit. Animi quam deleniti dolorum.
                    <br>Quidem dicta omnis sed eius similique minus necessitatibus ut quam aut, esse accusantium rem impedit non?<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sequi quis mollitia eveniet repudiandae excepturi amet.
                    <br>Eveniet dolorem nemo voluptate? Sapiente numquam voluptates autem delectus deserunt exercitationem eius repellendus quisquam?
                </p>
            </div>
        </div>

        <div class="slideshow-item">
            <img src="./slike/pozadina5.jpg" alt="">
            <div class=" slideshow-item-text">
                <h5>Vuk janackovic</h5>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, sit. Animi quam deleniti dolorum.
                    <br>Quidem dicta omnis sed eius similique minus necessitatibus ut quam aut, esse accusantium rem impedit non?<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sequi quis mollitia eveniet repudiandae excepturi amet.
                    <br>Eveniet dolorem nemo voluptate? Sapiente numquam voluptates autem delectus deserunt exercitationem eius repellendus quisquam?

                </p>
            </div>
        </div>
    </div>


</body>

</html>