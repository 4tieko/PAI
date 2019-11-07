<?php

    try{
        $pdo = new PDO('mysql:hostname=localhost;dbname=4tidata','root');
        $stmt = $pdo->prepare('INSERT INTO pc VALUES(NULL, :name, :cpu, :cena)');
        $stmt->bindValue(':name', $_POST['name']);
        $stmt->bindValue(':cpu', $_POST['cpu']);
        $stmt->bindValue(':cena', $_POST['cena']);
        $stmt->execute();
        header('Location: /4ti/index.php');

    }catch(PDOException $e){}

?>