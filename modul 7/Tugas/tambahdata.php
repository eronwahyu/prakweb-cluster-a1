<?php
    $nim = $_POST ["nim"];
    $nama = $_POST ["nama"];
    $nama_jur = $_POST ["jurusan"];
    $alamat = $_POST ["alamat"];
    $conn=mysqli_connect ("localhost","root","")
    or die ("koneksi gagal");
    mysqli_select_db($conn,"biodata"); echo "Nama      : $nama <br>"; 
    echo "Nim      : $nim    <br> ";
    echo "Alamat      : $alamat <br> ";
    echo "Jurusan      : $nama_jur <br> ";
    $sqlstr ="insert into mahasiswa (nama,nim,alamat,id) values ('$nama','$nim','$alamat','$nama_jur')";
    $hasil =    mysqli_query($conn, $sqlstr);
    echo "Simpan biodata berhasil dilakukan";

   
    ?>