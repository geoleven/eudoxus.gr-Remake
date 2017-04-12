<?php

	session_start();
	include ("../db/txt-db-api.php");
	
	if (!file_exists(DB_DIR . "dilws")) {
		$dbd = new Database("dilws");
		$dbd->executeQuery("CREATE TABLE dilws (id inc, umail str, bookid str)");
		$dbd->executeQuery("INSERT INTO dilws (umail, bookid) VALUES ('no12332131@no342.com', '0')");
	}
	else {
		$dbd = new Database("dilws");
	}
	
	$std = $dbd->executeQuery("SELECT id FROM dilws WHERE umail = \"".$_POST['myuid']."\" and bookid = \"".$_POST['mybookid']."\";");
	if($std->next()) {
		$dbd->executeQuery("DELETE FROM dilws WHERE umail = '".$_POST['myuid']."' and bookid = '".$_POST['mybookid']."';");
		
	}
	
?>