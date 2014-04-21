<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
	$busDam = $_SESSION['busDam'];
	$propDam = $_SESSION['propDam'];
	$vehDam = $_SESSION['vehDam'];
	$medDam = $_SESSION['medDam'];
	$funDam = $_SESSION['funDam'];
	$funcDam = $_SESSION['funcDam'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Medical Damage Write</title>
</head>

<body>
<?php
 
	$medName = $_POST['nameInj'];
	$relInj = $_POST['relInj'];
	$injur = $_POST['injur'];
	
	mysql_query("INSERT into medical_loss (cid, medName, relInj, medType) VALUES ('$cid', '$medName', '$relInj', '$injur')");
	
	if (isset($_POST['medYes'])) {
		mysql_query("UPDATE medical_loss SET medExp = '1' WHERE cid = '$cid'");
	} 
	
	if (isset($_POST['insurYes'])) {
		mysql_query("UPDATE medical_loss SET medInsur = '1' WHERE cid = '$cid'");
	} 
	
	// Determines whether or not the other personal damage checks have been selected
	if ($funDam == 'true') {
		header("Location: funeralDamagePage.php");
	} else {
		if ($funcDam == 'true') {
			header("Location: functionalNeedsPage.php");
		} else {header("Location: additionalCommentsPage.php");
		}
	}	
	

?>
</body>

</html>
