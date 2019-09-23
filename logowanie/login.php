<?php
    $login = $_POST['name'];
    $pass = $_POST['password'];
    if(isset($login)||isset($pass)){
        try
        {
           $pdo = new PDO('mysql:host=localhost;dbname=4tidata', 'root', '');
           $stmt = $pdo->prepare('SELECT * FROM users_data WHERE user_login=:userLogin AND user_password=:userPassword');
           $stmt -> bindParam(':userLogin', $login);
           $stmt -> bindParam(':userPassword', $pass);
           $stmt -> execute(); 
           $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
           $size = $stmt->rowCount();
           $data = array_values($result[0]);
           if($size==1){
               session_start();
               $_SESSION['logged']=true;
               $_SESSION['username']=$data[1];
               $_SESSION['email']=$data[3];
               header('Location: /4TI/logowanie');
           }else{
               session_destroy();
               $_SESSION['logged']=false;
           }
        }
        catch(PDOException $e)
        {
           echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        }
    }else{
        header('Location: /4TI/logowanie?login_success=false&login_error=Podaj login lub hasło!');
    }
?>