<?php
    $p = $_POST['pocz'];
    $g = $_POST['grz'];
    $pOut = $p*0.99;
    $gOut = $g*1.29;
?>
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
        tr,td{
            border: 2px solid black;
        }
    </style>
    <table>
            <tr>
                <td>Cena pączków</td>
                <td><?php echo $pOut; ?> PLN</td>
            </tr>
            <tr>
                <td>Cena grzybieni</td>
                <td><?php echo $gOut; ?> PLN</td>
            </tr>
        </tbody>
    </table>
</body>
</html>