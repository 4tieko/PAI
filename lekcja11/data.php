<?php

    $arr = array(
        1=>$_POST['imie'],
        2=>$_POST['nazwisko'],
        3=>$_POST['wiek'],
        4=>$_POST['wzrost'],
        5=>$_POST['waga']
    );

    foreach ($arr as $key => $value) {
        echo "tab[$key] = $value </br>";
    }

?>