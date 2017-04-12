<?php

	include ("../db/txt-db-api.php");
	session_start();
	
	if (isset($_SESSION["errmsg1"]) || isset($_SESSION["confmsg1"]) ) {
		if (isset($_SESSION["errmsg1"])) {
			unset($_SESSION["errmsg1"]);
		}
		if (isset($_SESSION["confmsg1"])) {
			unset($_SESSION["confmsg1"]);
		}
	}
	
	if (isset($_SESSION["uem"])) {
		if (!file_exists(DB_DIR . "users")) {
			$db = new Database("users");
			$db->executeQuery("CREATE TABLE users (id inc, pass str, name str, lastname str, email str, sxoli str, panep str, phone str)");
			$db->executeQuery("INSERT INTO users(pass, name, lastname, email, sxoli, panep, phone) VALUES ('123', 'Mustermann', 'Stoneway', 'no@no.com', 'Stonehenge', 'mple', '12345')");
		}
		else {
			$db = new Database("users");
		}
		$name = "";
		$lastname = "";
		$oldpass = "";
		$pass = "";
		$sxoli = "";
		$panep = "";
		$phone = "";
		$name = $_POST["name"];
		$lastname = $_POST["lastname"];
		$oldpass = $_POST["oldpass"];
		$pass = $_POST["pass"];
		$sxoli = $_POST["sxoli"];
		$panep = $_POST["panep"];
		$phone = $_POST["phone"];
		$st = $db->executeQuery("SELECT * FROM users WHERE email = \"".$_SESSION["uem"]."\";");		
		$st->next();
		list($myidl, $mypassl, $mynamel, $mylastnamel, $myemaill, $mysxolil, $mypanepl, $myphonel) = $st->getCurrentValues();					
		if ($name != "") {
			$mynamel = $name;
		}
		if ($lastname != "") {
			$mylastnamel = $lastname;
		}
		if ($sxoli != "") {
			$mysxolil = $sxoli;
		}
		if ($panep != "") {
			$mypanepl = $panep;
		}
		if ($phone != "") {
			$myphonel = $phone;
		}
		if ($pass != "") {
			if ($oldpass == $mypassl && $oldpass != $pass) {
				$mypassl = $pass;
			}
			else {
					$_SESSION["errmsg1"] = 3;
			}
		}			
		$sta = $db->executeQuery("UPDATE users SET pass='".$mypassl."', name ='".$mynamel."', lastname ='".$mylastnamel."', email ='".$myemaill."', sxoli='".$mysxolil."' , panep='".$mypanepl."' , phone='".$myphonel."' WHERE id ='".$myidl."'");
		if ($sta == false){
			$_SESSION["errmsg1"] = 2;
		}
		else {
			$_SESSION["confmsg1"] = 1;
		}
	}
	else {
		$_SESSION["errmsg1"] = 1;	
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
