<?php
    
    if(isset($_POST['submit'])){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=4tidata', 'root');
            $stmt = $pdo->prepare('INSERT INTO pc VALUES(NULL, :nazwa, :typ, :freq, :cena)');
            $stmt->bindValue(':nazwa', $_POST['nazwa']);
            $stmt->bindValue(':typ', $_POST['typ']);
            $stmt->bindValue(':freq', $_POST['freq']);
            $stmt->bindValue(':cena', $_POST['cena']);
            $stmt->execute();
            $pdo=$stmt=null;
            header('Location: /4ti/');
        }catch(PDOException $e){}
    }
?>