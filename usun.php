<?php

try{
    $pdo = new PDO('mysql:hostname=localhost;dbname=4tidata','root');
    $stmt = $pdo->prepare('DELETE from pc WHERE id = :pcID');
    $stmt->bindValue(':pcID', $_GET['id']);
    $stmt->execute();
    header('Location: /4ti/index.php');

}catch(PDOException $e){
    echo $e;
}

?>