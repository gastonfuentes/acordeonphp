<?php 

$link = 'mysql:host=localhost;dbname=acordeonphp';
$usuario = 'root';
$pass = '';

try {
	
    $pdo = new PDO($link,$usuario,$pass);

    echo 'conectado correctament';

} catch (PDOException $e) {
	print "error " . $e->getMessage();
}



 ?>