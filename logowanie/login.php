<?php
    $login = $_POST['name'];
    $pass = $_POST['password'];
    if(isset($login)||isset($pass)){
        try
        {
           $pdo = new PDO('mysql:host=localhost;dbname=4tidata', 'root', '');
           $stmt = $pdo->prepare('SELECT * FROM users WHERE user_login=:userLogin AND user_password=:userPassword');
           $stmt -> bindParam(':userLogin', $login);
           $stmt -> bindParam(':userPassword', $pass);
           $stmt -> execute(); 
           $result = $stmt->fetchAll(PDO::FETCH_OBJ);
           $size = $stmt->rowCount();
           $data = $result[0];
           if($size==1){
               session_start();
               $_SESSION['logged']=true;
               $_SESSION['username']= $data->user_login;
               $_SESSION['email']= $data->user_email;
               header('Location: /4TI/logowanie');
           }else{
               $_SESSION['logged']=false;
               header('Location: /4TI/logowanie?login_error=Zły login lub hasło!');
           }
        }
        catch(PDOException $e)
        {
           echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        }
    }else{
        header('Location: /4TI/logowanie?login_error=Podaj login lub hasło!');
    }
?>