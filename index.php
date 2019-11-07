<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<style>
    table,tr,td{
        border: 1px solid black;
    }
</style>
<?php

try{
    $pdo = new PDO('mysql:hostname=localhost;dbname=4tidata','root');
    $stmt = $pdo->query('SELECT * from pc');

    echo '<table>';

    echo '<tr>';
    echo '<th>Nr</th>';
    echo '<th>Nazwa</th>';
    echo '<th>Procesor</th>';
    echo '<th>Cena Brutto</th>';
    echo '</tr>';

    foreach($stmt as $row){
        $vat = $row['cenaNetto'] * 0.23;
        $brutto = $vat+$row['cenaNetto'];

        echo '<tr>';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['nazwa'].'</td>';
        echo '<td>'.$row['cpu'].'</td>';
        echo '<td>'.$brutto.'</td>';
        echo '<td><a href="/4ti/usun.php?id='.$row['id'].'"><input type="button" value="Usuń"></a></td>';
        echo '</tr>';
    }
    echo '</table>';
}catch(PDOException $e){}

?>

    <form action="dodaj.php" method="post">
        <input type="text" name="name" placeholder="Nazwa">
        <input type="text" name="cpu"  placeholder="Procesor">
        <input type="number" name="cena" placeholder="Cena Netto">
        <input type="submit" value="Dodaj">
    </form>
</body>
</html>