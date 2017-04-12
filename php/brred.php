<?php
	if($_POST['type'] == "simeiodianomis") {
		$brred = "../browse1.php";
	}
	elseif ($_POST['type'] == "ekdotis") { 
		$brred = "../browse2.php";
	} 
	else {
		$brred = "../browse3.php";
	} 

?>
<html>
<head>
<meta charset="utf-8">
<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo $brred; ?>" /> 
</head>
<body>
</body>
</html>