<?php
 
 try{
   $db = new PDO("mysql:host=localhost;dbname=iplogger","root","");
 }catch(PDOException $e){
    echo "Aconteceu um Erro: ".$e->getMessage();
 }