<?php

	include ("../db/txt-db-api.php");
	session_start();
	$_SESSION["tryreg"] = 1;

	/*if (!file_exists(DB_DIR . "files")) {
		$db = new Database(ROOT_DATABASE);
		$db->executeQuery("CREATE DATABASE USERS");
	}*/

	if (!file_exists(DB_DIR . "users")) {
		$db = new Database("users");
		$db->executeQuery("CREATE TABLE users (id inc, pass str, name str, lastname str, email str, sxoli str, panep str, phone str)");
		$db->executeQuery("INSERT INTO users(pass, name, lastname, email, sxoli, panep, phone) VALUES ('123', 'Mustermann', 'Stoneway', 'no@no.com', 'Stonehenge', 'mple', '12345')");
	}
	else {
		$db = new Database("users");
	}
	
	$email = $_POST["email"];
	$st = $db->executeQuery("SELECT id FROM users WHERE email = \"".$email."\";");
	if($st->next() != 0) {
		list($myid) = $st->getCurrentValues();
		$_SESSION["errmsg"] = "Email already in database";
	}
	else {
		$pass = $_POST["pass"];
		if ($pass == "" || $email == "") {
			$_SESSION["errmsg"] = "Email and/or password cannot be empty!";
		}
		else {
			if (isset($_SESSION["tryreg"])) { 
				unset($_SESSION["errmsg"]);
				unset($_SESSION["tryreg"]);
			}
			$db->executeQuery("INSERT INTO users(pass, name, lastname, email, sxoli, panep, phone) VALUES ('".$pass."', '".$_POST["name"]."', '".$_POST["lastname"]."', '".$email."', '".$_POST["sxoli"]."', '".$_POST["panep"]."', '".$_POST["phone"]."')");
			$_SESSION["uem"] = $email;
		}
	}
	
?>
<html>
<head>
<meta charset="utf-8">
<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo "../index.php" ; ?>" />
</head>
<body>
</body>
</html>