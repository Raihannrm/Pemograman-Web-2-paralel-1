<!DOCTYPE html>
<html>
    <head>
    </head>
        <body>
            <?php
                $C = 37.841;
                $F = round((9/5) * $C + 32, 4);
                $K = round($C + 273.15, 4);
                $R = (4/5) * $C;

                echo "Fahrenheit (F) = $F <br>";
                echo "Reamur (R) = $R <br>";
                echo "Kelvin (K) = $K <br>";
            ?>
        </body>
</html>