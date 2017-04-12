<?php 
	session_start();
	if (isset($_SESSION["uem"])) {
		unset($_SESSION["uem"]);
		session_destroy();
	}
	else {
		session_destroy();
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