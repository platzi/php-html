<?php

$usuarios = ["Mr.Michi", "RataxMaster", "JuanDamian"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>
<body>
    
    <ul>
        <?php for($x = 0; $x < 10; $x++): ?>
        
        <li><?= $x ?></li>
        
        <?php endfor; ?>


        <?php while(false): ?>

            <li>Cualquier cosa</li>

        <?php endwhile;?>
    </ul>

    <h1>Lista de usuarios:</h1>

    <ul>
        <?php foreach($usuarios as $username): ?>
        
        <li><?= $username ?></li>
        
        <?php endforeach; ?>
    </ul>

</body>
</html>