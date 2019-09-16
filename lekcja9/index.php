<?php

    $liczba=-1;

    // if($liczba<0){
    //     echo $liczba;
    //     echo "<br/>Liczba jest mniejsza od zera!";
    // }

    // if($liczba>=0){
    //     echo "Liczba jest równa lub więszka od zera!";
    // }

    
    // if($liczba>=0){
    //     echo "Liczba jest równa lub więszka od zera!";
    // }else{
    //     echo $liczba;
    //     echo "<br/>Liczba jest mniejsza od zera!";
    // }


    // if($liczba>0){
    //     echo "Liczba jest więszka od zera!";
    // }else if($liczba==0){
    //     echo "Liczba jest równa zero!";
    // }else{
    //     echo "Liczba jest mniejsza od zera!";
    // }

    $a=-3;
    $b=4;
    $c=-1;

    $delta = ($b*$b)-(4*$a*$c);
    
    if($a==0){
        echo "Równanie nie jest kwadratowe!";
    }else if($delta>0){
        $x1 = (-($b)+sqrt($delta))/(2*$a);
        $x2 = (-($b)-sqrt($delta))/(2*$a);
        echo "x<sub>1</sub>=$x1</br>";
        echo "x<sub>2</sub>=$x2";
    }else if($delta==0){
        $x = (-($b))/(2*$a);
        echo "Delta jest równa 0!";
        echo  "x=$x";
    }
?>