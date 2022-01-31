<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/newcollection.css">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>

    <?php




    function odstampajNovuKolekciju()
    {
        $conn = new mysqli("localhost", "root", "", "odeca");
        $select_nova_kolekcija = "SELECT * FROM `collection` WHERE `datum_proizvodnje` LIKE ?";
        $datum = "2022%";
        $statement = $conn->prepare($select_nova_kolekcija);
        $statement->bind_param("s", $datum);
        $statement->execute();
        $result = $statement->get_result();

        foreach ($result as $row) {
            $slika = $row["slika"];
            $name = $row["name"];
            $cena = $row["cena"];
            $tekst = $row["tekst"];
            $vrsta = $row["vrsta"];
            $productid = $row["product_id"];
            echo "<div class=\"card $vrsta\">";
            echo "<img src=\"$slika\" alt=\"slika\" style=\"width:100%\">
        <div class=\"cardtekst\">
            <h1>$name</h1>
            <p class=\"price\">$cena,00 Din</p>
            <p>$tekst</p>
            </div>
            <p><button type=\"submit\" name=\"add\">Add to Cart</button></p>
            <input type='hidden' name='product_id' value='$productid'>
            </div>";
        }
    }


    function odstampajZenskeStvari()
    {
        $conn = new mysqli("localhost", "root", "", "odeca");
        $select_zenske_stvari = "SELECT * FROM `collection` WHERE `gender` LIKE ?";
        $pol = "z";
        $statement = $conn->prepare($select_zenske_stvari);
        $statement->bind_param("s", $pol);
        $statement->execute();
        $result = $statement->get_result();
        foreach ($result as $row) {
            $slika = $row["slika"];
            $name = $row["name"];
            $cena = $row["cena"];
            $tekst = $row["tekst"];
            $vrsta = $row["vrsta"];
            $productid = $row["product_id"];
            echo "<div class=\"card $vrsta\">";
            echo "<img src=\"$slika\" alt=\"slika\" style=\"width:100%\">
            <div class=\"cardtekst\">
                <h1>$name</h1>
                <p class=\"price\">$cena,00 Din</p>
                <p>$tekst</p>
                </div>
                <p><button>Add to Cart</button></p>
                
                </div>";
        }
    }



    ?>

</body>

</html>