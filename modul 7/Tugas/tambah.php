<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>

</head>
<body>
<div class="container">
    <form action="tambahdata.php" method="POST">
        NIM : <input type="text" name="nim" class="form-control" size="35" maxlength="50"> <br>
        Nama : <input type="text" class="form-control" name="nama" size="35" maxlength="50"> <br>
        Alamat : <textarea name="alamat" class="form-control" id="" cols="30" rows="5"></textarea> <br>
        Jurusan : <select name="jurusan" class="form-control">
            <option value="if">IF</option>
            <option value="wibu">KOMIK</option>
            <option value="elektro">ELEKTRO</option>
        </select> <br>
        <input class="btn btn-primary" type="submit"  value="Simpan" >
        <input class="btn btn-primary" type="reset" value="Reset">
        </div>
    </form>
    <div class="container">
    <form action="searchdata.php" method="POST">
    Nama : <input type="text" name="nama" class="form-control" size="35" maxlength="50"> <br>
       
        <input type="submit" value="cari">
    </form>
    <form action="deletedata.php" method="POST">
    NIM : <input type="number" name="nim" class="form-control" size="35" maxlength="50"> <br>
       
        <input type="submit" value="cari">
    </form>
    </div>
</body>
</html>