<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $koneksi = mysqli_connect("localhost","root","")
    or die ("koneksi gagal");
    mysqli_select_db($koneksi, "mahasiswa");
    $hasil = mysqli_query($koneksi, "select * from informatika");
    while ($row=mysqli_fetch_assoc($hasil)){
        print_r($row);
    }
    ?>
</body>
</html>