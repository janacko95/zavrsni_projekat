<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section {
            padding: 20px;

            margin-left: 2%;
            margin-right: 2%;
            text-align: center;
        }

        section ul {

            margin-bottom: 15px;
        }

        section ul li {
            list-style: none;
            background: #eee;
            padding: 8px 20px;
            margin: 5px;
            letter-spacing: 2px;
            cursor: pointer;
            width: auto;
            display: inline-block;
        }

        section ul li.active {
            background: mediumaquamarine;
            color: white;
        }

        .filtriranje {
            text-align: center;
            align-items: center;
        }

        @keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeout {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .in,
        .out {
            animation-timing-function: ease-in-out;
            animation-duration: 705ms;
            -moz-animation-timing-function: ease-in-out;
            -moz-animation-duration: 705ms;
        }

        .fade.out {
            z-index: 0;
            animation-name: fadeout;
            animation-name: fadeout;
            opacity: 0;
        }

        .fade.in {
            opacity: 1;
            z-index: 10;
            animation-name: fadein;
            animation-name: fadein;
        }
    </style>
</head>

<body>

    <div class="filtriranje">
        <section>
            <ul>

                <li class="list active" data-filter="all">All</li>
                <li class="list" data-filter="haljina">Dresses</li>
                <li class="list" data-filter="jakna">Jacket</li>
                <li class="list" data-filter="pantalone">Trousers</li>

            </ul>
        </section>

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.list').click(function() {
                    const value = $(this).attr('data-filter');
                    if (value === 'all') {
                        $('.card').fadeIn('1000');
                    } else {
                        $('.card').not('.' + value).fadeOut('0');
                        $('.card').filter('.' + value).fadeIn('1000');
                    }
                })
                $('.list').click(function() {
                    $(this).addClass('active').siblings().removeClass('active');
                })
            })
        </script>
    </div>
</body>

</html>