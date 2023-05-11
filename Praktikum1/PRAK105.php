<!DOCTYPE html>
<html>
    <head>
        <style>
            table, td{
                border : 1px solid black;
                cellspacing : 1px solid black;
            }
            th{
                padding : 20px 0px 20px 0px;
                background-color : red;
                font-size : 24px;
            }
        </style>
    </head>
        <body>
            <?php
               $array_hp = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover5"];
            ?>
            <table>
                <tr>
                    <th>Daftar Smartphone Samsung</th>
                </tr>
                <tr>
                    <td><?php echo $array_hp[0] ?></td>
                </tr>
                <tr>
                    <td><?php echo $array_hp[1] ?></td>
                </tr>
                <tr>
                    <td><?php echo $array_hp[2] ?></td>
                </tr>
                <tr>
                    <td><?php echo $array_hp[3] ?></td>
                </tr>
            </table>
        </body>
</html>