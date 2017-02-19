<?php
 require_once 'db.php';
 

 $pdo = $db->prepare("SELECT * FROM cliente");
 $pdo->execute();
 
 while ($linha = $pdo->fetch(PDO::FETCH_ASSOC)) {
 	echo 'um usuario da cidade de: '.$linha['cidade'].' com o cep de: '.$linha['cep'].' do pais: '.$linha['pais'].' com o ip: '.$linha['ip'].' na latitude: '.$linha['latitude'].' e na longitude: '.$linha['longitude'].' provido pela a empresa: '.$linha['empresa'].' acessou o seu site<br><br><br>';
 }
?>

<html>
 <head>
    <title>OK</title>
 </head>
 <body>
    
 </body>
</html>