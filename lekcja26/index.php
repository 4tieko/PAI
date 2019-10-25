<?php

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=4tidata','root');
        $stmt = $pdo->query('SELECT * FROM ksiazka_telefoniczna');

        foreach($stmt as $row){
            echo $row['imie'].'&nbsp;';
            echo $row['nazwisko'].'&nbsp;';
            echo $row['telefon'].'</br>';
        }

        $pdo=$stmt=null;
    }catch(PDOException $e){
        echo $e;
    }
?>