<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function faktorial ($x) {
        $hasil=1;
        echo "<h2>FUNGSI FAKTORIAL DARI $x : <h2>";
        for($i=0;$i<$x;$x--){
        $hasil=$hasil*$x;
        }
        echo $hasil;
    }
    
    faktorial(10);
    faktorial(5);
    ?>
</body>
</html>