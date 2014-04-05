<?php
	$db=new PDO("mysql:dbname=library","root","root");
	$db->query("SET NAMES utf8;");

	$sql= $db->prepare( 'SELECT * FROM book' );
	$sql->execute();
	$all = $sql->fetchAll();
	echo json_encode($all);
?>