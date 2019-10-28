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
    $pdo = new PDO('mysql:host=localhost;dbname=4tidata', 'root');
    $stmt = $pdo->query('SELECT * FROM pc');

    
        echo '<table>';
        echo '<tr>';
        echo '<td>Nazwa Procesora</td>';
        echo '<td>Typ Procesora</td>';
        echo '<td>Częstotliwość</td>';
        echo '<td>Cena</td>';
        echo '<td></td>';
        echo '</tr>';



    foreach($stmt as $row){
        echo '<tr>';
        echo '<td>'.$row['nazwa_cpu'].'</td>';
        echo '<td>'.$row['typ_cpu'].'</td>';
        echo '<td>'.$row['freq_cpu'].'</td>';
        echo '<td>'.$row['cena_cpu'].'zł </td>';
        echo '<td><a href="/4ti/delete.php?id='.$row['id'].'"><button>Usuń</button></a></td>';
        echo '</tr>';
    }

    echo '</table>';


}catch(PDOException $e){
    echo $e;
}
?>
    <form action="/4ti/dodaj.php" method="post">
    <input type="text" name="nazwa" placeholder="Nazwa Procesora">
    <input type="text" name="typ" placeholder="Typ Procesora">
    <input type="text" name="freq" placeholder="Częstotliwość Procesora">
    <input type="number" name="cena" placeholder="Cena Procesora">
<input type="submit" name="submit" value="Dodaj">
</form>
</body>
</html>