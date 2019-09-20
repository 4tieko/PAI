<?php
if($_POST['od']<=0){
    echo "Wprowadziłeś za mało!";
}else{
    if(($_POST['od']>0 && $_POST['od']<=10)&&($_POST['do']>0&&$_POST['do']<10)){
        for($i=$_POST['od'];$i<=$_POST['do'];$i++){
            echo $i."</br>";
        }
    }else{
        echo "Błąd zakresu";
    }
}

?>