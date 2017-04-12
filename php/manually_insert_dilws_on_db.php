<?php

	include ("../db/txt-db-api.php");
	
	//if (!file_exists(DB_DIR . "pos")) {
		$db = new Database("dilws");
		//$db->executeQuery("CREATE TABLE dilws (id inc, umail str, bookid str)");
		$db->executeQuery("INSERT INTO dilws (umail, bookid) VALUES ('no12332131@no342.com', '0')");
	//}
	
	
	//$sta = $db->executeQuery("UPDATE pos SET image = 'http://michellesread.com/files/2013/04/smile.jpg' WHERE id = 1;");
	
	
	

?>
