<?php

	include ("../db/txt-db-api.php");


	/*if (!file_exists(DB_DIR . "files")) {
		$db = new Database(ROOT_DATABASE);
		$db->executeQuery("CREATE DATABASE files");
	}
	else {
		$db = new Database(ROOT_DATABASE);
	}*/

	if (!file_exists(DB_DIR . "users")) {
		$db = new Database("users");
		$db->executeQuery("CREATE TABLE users (id inc, pass str, name str, lastname str, email str, sxoli str, panep str, phone str)");
		$db->executeQuery("INSERT INTO users(pass, name, lastname, email, sxoli, panep, phone) VALUES ('123', 'Mustermann', 'Stoneway', 'no@no.com', 'Stonehenge', 'mple', '12345')");
	}
	else {
		$db = new Database("users");
		//$db->executeQuery("INSERT INTO users(pass, name, lastname, email, sxoli, panep, phone) VALUES ('123', 'Mustermann', 'Stoneway', 'no@no.com', 'Stonehenge', 'mple', '12345')");
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$st = $db->executeQuery("SELECT pass FROM users WHERE email = \"".$email."\";");
		
		if($st->next() != 0) {
			list($mypass) = $st->getCurrentValues();
			if ( $mypass == $pass) {
				echo "Success";
				session_start();
				$_SESSION["uem"] = $email;
			}
			else {
				echo "Failure";
				$_SESSION["errmsg"] = "Wrong password";
			}
		}
		else {
			echo "Failure";
			$_SESSION["errmsg"] = "User not existant";
		}
	}
	



?>
<html>
<head>
<meta charset="utf-8">
<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo $_SERVER['HTTP_REFERER']; ?>" /> 
</head>
<body>
</body>
</html>