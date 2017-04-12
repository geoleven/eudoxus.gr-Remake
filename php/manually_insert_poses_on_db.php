<?php

	include ("../db/txt-db-api.php");
	
	//if (!file_exists(DB_DIR . "pos")) {
		$db = new Database("pos");
		//$db->executeQuery("CREATE TABLE pos (id inc, name str, lastname str, type str, email str, area str, phone str)");
		$db->executeQuery("INSERT INTO pos (name, lastname, type, email, area, phone) VALUES ('Vivliopwleio', 'To mple', 'simeiodianomis', 'tomple@paleta.gr', 'Koukouvaounes', '2101232231')");
	//}
	
	
	//$sta = $db->executeQuery("UPDATE pos SET image = 'http://michellesread.com/files/2013/04/smile.jpg' WHERE id = 1;");
	
	
	

?>
