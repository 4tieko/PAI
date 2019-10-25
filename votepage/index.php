<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_GET['voteid']))  return;
        
        $id = $_GET['voteid'];
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=4tidata','root');
            $stmt = $pdo->prepare('SELECT * FROM votepage WHERE vote_id = :id');
            $stmt->bindValue(':id', $_GET['voteid']);
            $stmt->execute();

            if($stmt->rowCount()>0){    
                foreach($stmt as $row){
                    echo '<h1>'.$row['vote_title'].'</h1>';
                }
            }
        }catch(PDOException $e){
            echo $e;
        }

    ?>
</body>
</html>

<!-- function user_uid(){
        $uid = md5($_SERVER['HTTP_USER_AGENT'] .  $_SERVER['REMOTE_ADDR']);
        return $uid;
    } -->