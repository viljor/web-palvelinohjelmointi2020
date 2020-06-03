
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjoitukset 1: Tehtävä 4</title>
    <style>
        img {
            max-width: 100%;
            max-height: 100%;
        }
        .column {
            float: left;
            width: 300px;
            padding: 5px;
        }

        .images::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
    <div class="images">
        <?php
            //main
            PrintPics();

            //funktio
            function PrintPics() {
                for ($i = 0; $i < 3; $i++) {
                    $pic = (rand(1,5));
                    echo "<div class='column'><img src='http://localhost/harj1/media/img_{$pic}.jpg'></img></div>"; 
                }
            }
        ?>
    </div>
</body>
</html>