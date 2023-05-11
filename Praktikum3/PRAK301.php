<html>
    <head>
        <title>Soal 1</title>
    <style>
        .merah{
            color : red;
        }
        .hijau{
            color : green;
        }
    </style>
    </head>
    <body>
        <form action="" method="POST">
            <label for=""> Jumlah Peserta </label>
            <input type="text" name="Nilai" value="<?=isset($_POST['Nilai']) ? $_POST['Nilai'] : ''?>">
            <br>
            <button type="submit" name="submit">Cetak</button>
        </form>
        <?php
        if (isset($_POST['submit'])){
            $angka = $_POST['Nilai'];

            $nilai = 1;
            while($nilai <= $angka){
                if ($nilai %2 ==0){
                    echo "<p class = merah> Peserta ke- $nilai </p>";
                }else if ($nilai %2 == 1){
                    echo "<p class = hijau> Peserta ke- $nilai </p>"; 
                }
            $nilai++;
            }
        } 
        ?>