<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $bil1=20;
    $bil2=5;
    $jumlah = $bil1 +$bil2;
    $kurang = $bil1 -$bil2;
    $bagi = $bil1 / $bil2;
    $modul = $bil1 % $bil2;
    $kali = $bil1 * $bil2;
    echo "bilangan 1 = $bil1 <br>";
    echo "bilangan 2 = $bil2 <br>";
    echo "Berikut hasil dari setiap operasi <br><br>";
    echo "PENJUMLAHAN<br>";
    echo "Operator :    +<br>";
    echo "Hasil : $jumlah";
    echo "<br> <br>";
    echo "PENGURANGAN<br>";
    echo "Operator :    -<br>";
    echo "Hasil : $kurang <br><br>";
    echo "Kali<br>";
    echo "Operator :    *<br>";
    echo "Hasil : $kali <br><br>";
    echo "PEMBAGIAN<br>";
    echo "Operator :    /<br>";
    echo "Hasil : $bagi <br><br>";
    echo "MODULUS<br>";
    echo "Operator :    %<br>";
    echo "Hasil : $modul <br><br>";
    
    ?>
</body>
</html>