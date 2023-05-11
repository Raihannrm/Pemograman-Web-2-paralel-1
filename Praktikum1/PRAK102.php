<!DOCTYPE html>
<html>
    <head>
    </head>
        <body>
            <?php
                $jari = 4.2;
                $tinggi = 5.4;
                $panjang = 8.9;
                $lebar = 14.7;
                $sisi = 7.9;

                $alas= $panjang * $lebar;
                $hasil = (1/2 * $alas * $tinggi); // rumus prisma segitiga

                echo "$hasil", "m3"
            ?>
        </body>
</html>