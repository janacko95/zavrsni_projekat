<!DOCTYPE html>
<html lang="en">
<?php
function radnovreme()
{
    date_default_timezone_set("CET");
    $vreme = date('G');
    if ($vreme >= 9 && $vreme < 19) {
        $radnovreme = "./slike/open.png";
        echo "<img src=\" $radnovreme\">";
    } else {
        $radnovreme = "./slike/closed.png";
        echo "<img src=\"$radnovreme\">";
    }
}



/*UBACIO SAM FOOTER SAMO DA BIH ISPUNIO USLOVE,OD PONEDELJKA KADA SAM NA GODISNJEM DORADICU GA ILI CU DA ZAPOCNEM U POTPUNOSTI NOVI PROJEKAT */
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Document</title>
    <style>
        .l-footer img {
            height: 200px;
            width: 200px;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;

        }

        body {
            padding-bottom: 250px;
        }

        @media screen and (max-width:600px) {
            .footer {

                position: unset;
                padding-bottom: 0;
            }


        }
    </style>
</head>

<body>
    <footer class="footer">

        <ul class="r-footer">
            <li>
                <h2>
                    Social</h2>
                <ul class="box">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Pinterest</a></li>
                    <li><a href="#">Dribbble</a></li>
                </ul>
            </li>

            <li>
                <h2>
                    Legal</h2>
                <ul class="box">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Contract</a></li>
                </ul>
            </li>
        </ul>
        <div class="l-footer">
            <?php echo radnovreme() ?>
        </div>

    </footer>

</body>

</html>