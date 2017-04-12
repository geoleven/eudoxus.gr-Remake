<?php

	session_start();
	include ("../db/txt-db-api.php");
	
	if (!file_exists(DB_DIR . "trade")) {
		$dbd = new Database("trade");
		$dbd->executeQuery("CREATE TABLE trade (id inc, umail str, bookid str)");
		$dbd->executeQuery("INSERT INTO trade (umail, bookid) VALUES ('no12332131@no342.com', '0')");
	}
	else {
		$dbd = new Database("trade");
	}
	
	$std = $dbd->executeQuery("SELECT id FROM trade WHERE umail = \"".$_POST['myuid']."\" and bookid = \"".$_POST['mybookid']."\";");
	if(!$std->next()) {
		$dbd->executeQuery("INSERT INTO trade (umail, bookid) VALUES ('".$_POST['myuid']."', '".$_POST['mybookid']."')");
		
	}
	
?>