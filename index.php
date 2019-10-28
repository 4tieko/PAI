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
    $pdo = new PDO('mysql:host=localhost;dbname=action;charset=utf8','root');
    $count = $pdo->query('SELECT * FROM cennik');
    $count = ceil(($count->rowCount())/25);

    echo '<table>';
    echo '
        <thead>
        <tr>
            <td>Nazwa Produktu</td>
            <td>Cena NETTO</td>
        </tr>
        </thead>
    ';
    if(!isset($_GET['page']) || $_GET['page']==1){
        $range = 0;
    }else{
        $range = $_GET['page']*25;
    }
    $first = $pdo->query("SELECT `Nazwa produktu`,`Cena netto PLN` FROM cennik LIMIT $range,25");

        foreach($first as $key=>$row){
            echo '<tr>';
            echo '<td>'.$row['Nazwa produktu'].'</td>';
            echo '<td>'.$row['Cena netto PLN'].'</td>';
            echo '</tr>';
        }

    echo '</table>';


    echo '<form method="get" action="/4ti/index.php">';
    echo 'Strona: <select name="page">';
    for($i=1;$i<$count;$i++){
        if($_GET['page']==$i){
            echo '<option selected value="'.$i.'">'.$i.'</option>';
        }else{
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
    }
    echo '</select></br>';
    echo '<input type="submit" value="Wyświetl">';
    echo '</form>';
    $pdo=$first=null;
}catch(PDOException $e){}

?>
</body>
</html>
