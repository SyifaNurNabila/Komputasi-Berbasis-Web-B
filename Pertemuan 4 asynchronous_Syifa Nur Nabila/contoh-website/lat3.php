<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Ini adalah komentar

        # Ini adalah komentar

        /* 
        Ini komentar yang dapat ditulis
        lebih dari 1 baris
        */
        $x = 5 /*+ 15*/ + 5;
        echo $x; 

        $namaDepan = "Hendi";
        $namaBelakang = "Ananta";

        $namaLengkap = $namaDepan." ".
        $namaBelakang;

        echo "<br>Nama saya adalah ".
        $namaLengkap;
        echo "<br>Nama saya adalah $namaLengkap";

        $tglMasuk = 2021;
        $tglmasuk = 2020;
        echo "<br>Tanggal masuk kuliah $tglMasuk";
        echo "<br>Tanggal masuk kuliah ". $tglmasuk;
        
    ?>
</body>
</html>