<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><b>Menu :</b></h2>
    -Ayam Goreng
    <br>
    -Lobster
    <br>
    -Pizza
    <br>
    -Tiramisu
    <br>
    -Pasta
    <br>

    <?php

        echo "<br>Halo pesanan anda : $a";
        if( $a == "ayam goreng"){
            echo "<br> harga $a : Rp.150000";
        }
        elseif( $a == "lobster"){
            echo "<br>harga $a : Rp.20000";
        }
        elseif( $a == "pizza"){
            echo "<br>harga $a : Rp.50000";
        }
        elseif( $a == "tiramisu"){
            echo "<br>harga $a : Rp.30000";
        }
        elseif( $a == "pasta"){
            echo "<br>harga $a : Rp.25000";
        }
        else{
            echo "? mohon maaf pesanan anda tidak ada.";
        }

    ?>
</body>
</html>