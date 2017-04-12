<?php

	include ("../db/txt-db-api.php");
	session_start();	
	
	$mysearch = $_POST["bsearch"];
	$pathtogo = "";
	if ( $mysearch == "") {
		$pathtogo = "../search.php";
	}
	else {
		$pathtogo = "https://www.google.gr/search?q=" . $mysearch . "+site%3A" . $_SERVER['SERVER_NAME'];
	}
	
?>

<html>
<head>
<meta charset="utf-8">
<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo $pathtogo; ?>" />
</head>
<body>
</body>
</html>