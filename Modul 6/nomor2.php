<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function bet ($nama,$color='red'){
        $a=strlen($nama);
        $harga;
        if($a<=10 && $a>0){
            $harga=$a*300;
        }elseif ($a>10 && $a<=20){
            $harga=$a*500;
        }else {
            $harga=$a*700;
        }
        echo '<font color="'.$color.'">'.$nama.'</font> : ';
        echo '<font color="'.$color.'">'.$harga.'</font> <br><br>';

    }
        bet("Eron Wahyu Kirigaya",'green');
        bet("Pak Gading Marten");
    ?>
</body>
</html>