<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $koneksi = mysqli_connect("localhost","root","","mahasiswa");

    if(mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();  
    }else{
        echo "sukses";
    }
    ?>
</body>
</html>