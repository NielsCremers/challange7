<?php
$sql = "INSERT INTO tb_menuitem 
            (naam, email, bericht) 
            VALUES ('$naam', '$email', '$bericht')";  
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();




?>