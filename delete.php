<?php
	$bid = $_POST['bid'];

	$db=new PDO("mysql:dbname=library","root","root");
	$db->query("SET NAMES utf8;");

	$sql= $db->prepare( 'DELETE FROM book WHERE bid=?' );
	$sql->bindValue(1,$bid);
	$sql->execute();
	echo json_encode($all);

?>