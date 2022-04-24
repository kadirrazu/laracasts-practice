<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=mytodos','root','');
} catch(PDOException $e){
   echo $e->getMessage();
}
