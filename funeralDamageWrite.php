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
<title>Funeral Damage Write</title>
</head>

<body>
<?php

	$nameFun = $_POST['nameFun'];
	$dateFun = $_POST['dateFun'];
	$relFun = $_POST['relFun'];
	$cauDea = $_POST['cauDea'];
	
	mysql_query("INSERT into funeral_info (cid, nameFun, dateFun, relatFun, cauDea) VALUES ('$cid', '$nameFun', '$dateFun', '$relFun', '$cauDea')");
	
		// Determines whether or not the other personal damage checks have been selected
	if ($funcDam == 'true') {
		header("Location: functionalNeedsPage.php");
	} else {}

?>

</body>

</html>
