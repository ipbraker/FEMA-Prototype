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
<title>Vehicle Damage Write</title>
</head>

<body>
<?php

	$insurComp = $_POST['typeInsurVeh'];
	$rentCost = $_POST['rentCost'];
	
	mysql_query("INSERT into vehicle_damage (cid, insurComp, dailyCost) VALUES ('$cid', '$insurComp', '$rentCost')");
	
	if (isset($_POST['driYes'])) {
		mysql_query("UPDATE vehicle_damage SET vehDriv = '1' WHERE cid = '$cid'");
	} 
	
	if (isset($_POST['regYes'])) {
		mysql_query("UPDATE vehicle_damage SET vehReg = '1' WHERE cid = '$cid'");
	} 
	
	if (isset($_POST['insurYes'])) {
		mysql_query("UPDATE vehicle_damage SET vehInsur	= '1' WHERE cid = '$cid'");
	} 
	
	if (isset($_POST['transYes'])) {
		mysql_query("UPDATE vehicle_damage SET altTrans	= '1' WHERE cid = '$cid'");
	} 

	if (isset($_POST['rentYes'])) {
		mysql_query("UPDATE vehicle_damage SET rentServ	= '1' WHERE cid = '$cid'");
	} 
	
	// Determines whether or not the other personal damage checks have been selected
	if ($medDam == 'true') {
		header("Location: medicalDamagePage.php");
	} else {
		if ($funDam == 'true') {
			header("Location: funeralDamagePage.php");
		} else {
			if ($funcDam == 'true') {
				header("Location: functionalNeedsPage.php");
			} else {
			}
		}	
	}


?>
</body>

</html>
