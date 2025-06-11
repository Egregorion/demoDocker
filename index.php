<?php 
try{
    $db_connect = new PDO('mysql:host=db;dbname=mydb', 'user', 'trustNo1');
    echo 'connexion établie';
}catch(PDOException $e) {
    echo $e->getMessage();
} 

$title = "mon projet docker";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <h1>Bienvenu sur mon site créé avec Docker</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet quisquam placeat nihil error ab sapiente ipsa ullam, cum, recusandae minima quidem expedita repellendus ratione atque, modi vel fugit natus aperiam.</p>
</body>
</html>