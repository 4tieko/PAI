<?php

    try{
        $pdo = new PDO('mysql:hostname=localhost;dbname=action;charset=utf8', 'root');
        if(isset($_GET['search'])){
            $stmt = $pdo->query('SELECT * FROM `cennik` WHERE `Nazwa produktu` LIKE "%'.$_GET['search'].'%" LIMIT 25');
        }else{
            $stmt = $pdo->query('SELECT * FROM `cennik`');
        }

        echo '<table>';
        echo '
        <thead>
            <tr>
                <td>Grupa towarowa</td>
                <td>Producent</td>
                <td>Nazwa produktu</td>
                <td>Gwarancja</td>
                <td>Cena</td>
            </tr>
            </thead>
            <tbody>
        ';
        foreach($stmt as $row){
            echo '<tr>';
            echo '<td>'.$row['Grupa towarowa'].'</td>';
            echo '<td>'.$row['Producent'].'</td>';
            echo '<td>'.$row['Nazwa produktu'].'</td>';
            echo '<td>'.$row['Gwarancja'].'</td>';
            echo '<td>'.$row['Cena brutto PLN'].'</td>';
            echo '</tr>';
        }
        echo '
        </tbody>
        </table>';
    }catch(PDOException $e){
        echo $e;
    }

?>