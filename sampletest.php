<?php
$dbserver="192.168.40.28";
	$db="abrs_new";
	$dbuser="abrsdemo";
	$dbpassword="K0DuRU))(($$";
$pdo = new PDO('mysql:host=192.168.40.28;dbname=abrs_new', $dbuser, $dbpassword); 
var_dump($pdo);
$tables = $pdo->query('show tables');
var_dump($tables);
var_dump($tables->fetchAll(PDO::FETCH_OBJ));
