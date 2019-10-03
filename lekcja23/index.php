<?php
    //if(){
        // $liczba1 = $_POST['liczba1'];
        // $liczba2 = $_POST['liczba2'];
        // $typdzialania=$_POST['typ'];
        if(isset($_POST['dzialnie'])){
            try{
                $out = eval("return ".$_POST['dzialnie'].";");
                echo $out;
            }catch(Exception $e){
                echo "Podaj prawidłowe działanie $e";
            }
        }
        
    
    // echo licz($liczba1, $liczba2, $typdzialania);


    //     function licz($x, $y, $z){

    //         switch ($z){
    //             case "+":
    //                 return $x+$y;
    //                 break;
    //             case "-":
    //                 return $x-$y;
    //                 break;
    //             case "*":
    //                 return $x*$y;
    //                 break;
    //             case "/":
    //                 return $x/$y;
    //                 break;
    //         }
    //     }
    // }
    

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
    <form action="#" method="post">
        <input type="text" name="dzialnie">
        <input type="submit" value="Policz">
    </form>
</body>
</html>