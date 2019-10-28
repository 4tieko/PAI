<?php
    
    if(isset($_GET['id'])){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=4tidata', 'root');
            $stmt = $pdo->prepare('DELETE FROM pc WHERE id = :id');
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->execute();
            $pdo=$stmt=null;
            header('Location: /4ti/');
        }catch(PDOException $e){}
    }
?>