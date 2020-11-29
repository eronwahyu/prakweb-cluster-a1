<?php
    session_start();
    //redirect jika mempunyai session
    if(isset($_SESSION['user'])){
        header('location:home.php');
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Auth</title>
</head>
<body>
    <h1>PHP Login</h1>
    <h3><span></span>Login</h3>
    <form method ="post" action="login.php">
        <div>
            <input type="text" name="username" placeholder="Username.." autofocus required>
        </div>
        <div>
            <input type="password" name="password" placeholder="Password.." required>
        </div>
        <button type="submit" name="login"><span></span>Login</button>
    </form>
<?php
    if(isset($_SESSION['message'])){
        ?>
        <div>
            <?= $_SESSION['message'];?>
        </div>
        <?php unset($_SESSION['message']);
    }
?>

</body>
</html>