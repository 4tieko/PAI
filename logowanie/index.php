<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION['logged'])){
        echo 'Logged as: '.$_SESSION['username'].'</br>';
        echo 'User email: '.$_SESSION['email'].'</br>';
        echo '
            <form action="logout.php" method="post">
                <input type="submit" value="Logout">
            </form>
        ';
     }else{
        $error = "";
        if(isset($_GET['login_error'])){
            $error = '
                <p style="color:red;">'.$_GET['login_error'].'</p>
            ';
        }
            echo '
            <form action="login.php" method="post">
                <input type="text" name="name" placeholder="Login">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Login">
            '.$error.'
            </form>
            ';
        }
    ?>
</body>
</html>