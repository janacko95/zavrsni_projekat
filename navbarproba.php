<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/probninavbar.css">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <title>Document</title>
    <style>
        #cart_count {
            text-align: center;
            padding: 0 0.9rem 0.1rem 0.9rem;
            border-radius: 3rem;
            background-color: white;
            color: gold;
        }
    </style>
</head>

<body>

    <header>
        <div class="inner">
            <div class="logo">
                <div class="homepage">

                    <a href="./homepage.php">Wolf's <span>Clothing</span></a>

                </div>
            </div>

            <nav>

                <li><span><a href="./newcollection.php">New Collection</a></span></li>
                <li><span><a href="./woman.php">SALE</a></span></li>
                <li><span><a href="./man.php">Man</a></span></li>
                <li><span><a href="./login.php" class="button"><i class="fas fa-user"></i></a></span></li>
                <li><span>



                        <a href="./cart.php">

                            <h5 class="px-5 cart">
                                <i class="fas fa-shopping-cart">Cart</i>

                                <?php

                                if (isset($_SESSION['cart'])) {
                                    $count = count($_SESSION['cart']);
                                    echo  "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                } else {
                                    echo  "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                }

                                ?>

                            </h5>

                        </a></span></li>
        </div>


    </header>

</body>

</html>