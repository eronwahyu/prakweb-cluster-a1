<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama= array("lanirme","aduh","qifuat","toda","anevi","samid","kifuat","asuna","habib","rizieq");
    sort($nama);
    for ($i=0; $i<=9; $i++) {
   echo $nama[$i]."<br />";
    }
    ?>
</body>
</html>