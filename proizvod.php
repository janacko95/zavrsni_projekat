<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php




    function component($productname, $productprice, $productimg, $productid, $producttekst, $vrsta)
    {
        $element = "<div class=\"card $vrsta\">
        <form action=\"man.php\" method=\"post\">
       <img src=\"$productimg\" alt=\"slika\" style=\"width:100%\">
        <div class=\"cardtekst\">
            <h1>$productname</h1>
            <p class=\"price\">$$productprice</p>
            <p>$producttekst</p>
            </div>
            <button type=\"submit\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
            <input type='hidden' name='product_id' value='$productid'></form>
            </div>";
        echo $element;
    }

    function componentSale($productname, $productprice, $productimg, $productid, $producttekst, $vrsta)
    {
        $popust = $productprice * 1.4;


        $element = "<div class=\"card $vrsta\">
        <form action=\"woman.php\" method=\"post\">
       <img src=\"$productimg\" alt=\"slika\" style=\"width:100%\">
        <div class=\"cardtekst\">
            <h1>$productname</h1>
            <span class=\"price\" style=\"color:red\" ><small style=\"color:grey; text-decoration: line-through;\">$$popust </small>$$productprice</span>
            <p>$producttekst</p>
            </div>
            <button type=\"submit\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
            <input type='hidden' name='product_id' value='$productid'></form>
            </div>";
        echo $element;
    }


    function componentNewCollection($productname, $productprice, $productimg, $productid, $producttekst, $vrsta)
    {
        $element = "<div class=\"card $vrsta\">
        <form action=\"newcollection.php\" method=\"post\">
        <img src=\"$productimg\" alt=\"slika\" style=\"width:100%\">
        <div class=\"cardtekst\">
            <h1>$productname</h1>
            <p class=\"price\">$$productprice</p>
            <p>$producttekst</p>
            </div>
            <button type=\"submit\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
            <input type='hidden' name='product_id' value='$productid'></form>
            </div>";
        echo $element;
    }



    function cartElement($productimg, $productname, $productprice, $productid)
    {
        $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" style=\"width:100%\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: Wolf's Clothing</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </form>
    
    ";
        echo  $element;
    }
    ?>
</body>

</html>