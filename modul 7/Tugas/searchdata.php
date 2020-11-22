<?php
    
    $cari=$_POST['nim'];
    $conn=mysqli_connect ("localhost","root","");
    mysqli_select_db($conn,"biodata");
    $hasil=mysqli_query($conn, "select * from mahasiswa where nim like '%$cari%'");
    $jumlah=mysqli_num_rows($hasil);
    echo "<br>";
    echo "Ditemukan: $jumlah"; echo "<br>";
    while($baris=mysqli_fetch_array($hasil)){
        echo "Nim : ";echo $baris[0]; echo "<br>";
        echo "Nama : ";echo $baris[1]; echo "<br>";
        echo "Alamat : ";echo $baris[2]; echo "<br>";
        echo "Jurusan : ";echo $baris[3];
    }
    ?>