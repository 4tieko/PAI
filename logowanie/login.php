<?php
    session_start();
    $login = $_POST['name'];
    $password = $_POST['password'];
    if($login=="admin" || $password=="admin"){
        $_SESSION['logged']=true;
        $_SESSION['username']="admin";
        header('Location: /4TI');
    }else{
        header('Location: /4TI?login_error=Wrong login or password');
    }
?>