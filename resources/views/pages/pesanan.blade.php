<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend><h2><b>Menu :</b></h2></legend>
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

        echo "<hr>";

        echo "<br>Halo pesanan anda : $b";
        if( $b == "ayam goreng"){
            echo "<br> hbrga $b : Rp.150000";
        }
        elseif( $b == "lobster"){
            echo "<br>harga $b : Rp.20000";
        }
        elseif( $b == "pizza"){
            echo "<br>harga $b : Rp.50000";
        }
        elseif( $b == "tiramisu"){
            echo "<br>harga $b : Rp.30000";
        }
        elseif( $b == "pasta"){
            echo "<br>harga $b : Rp.25000";
        }
        else{
            echo "? mohon maaf pesanan anda tidak ada.";
        }
    ?>
    </fieldset>
    
</body>
</html>