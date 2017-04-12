<?php

	include ("../db/txt-db-api.php");
	
	//if (!file_exists(DB_DIR . "books")) {
		$db = new Database("books");
		//$db->executeQuery("CREATE TABLE books (id inc, name str, ekdotis str, isbn str, writer str, lang str, sxoli str, image str)");
		//$db->executeQuery("INSERT INTO books (name, ekdotis, isbn, writer, lang, sxoli, image) VALUES ('ΤΕΧΝΗΤΗ ΝΟΗΜΟΣΥΝΗ: ΜΙΑ ΣΥΓΧΡΟΝΗ ΠΡΟΣΕΓΓΙΣΗ', 'ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ ΕΠΕ', '960-209-873-2', 'STUART RUSSELL, PETER NORVIG', 'el', 'Φιλοσοφική', 'https://static.eudoxus.gr/books/preview/09/cover-13909.jpg')");
	//}
	
	
	$sta = $db->executeQuery("UPDATE books SET image = 'http://michellesread.com/files/2013/04/smile.jpg' WHERE id = 1;");
	
	
	

?>
