<?php
	$title = $_POST['title'];
	$author = $_POST['author'];

	$db=new PDO("mysql:dbname=library","root","root");
	$db->query("SET NAMES utf8;");

	$sql= $db->prepare( 'INSERT INTO book (title, author) VALUES(?,?)' );
	$sql->bindValue(1,$title);
	$sql->bindValue(2,$author);
	$sql->execute();
	echo json_encode($all);

?>