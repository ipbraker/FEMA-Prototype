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
<title>Functional Needs Write</title>
</head>

<body>

<?php

	mysql_query("INSERT into functional_needs (cid) VALUES ('$cid')");
	
	if (isset($_POST['commYes'])) {
		mysql_query("UPDATE functional_needs SET comDev = '1' WHERE cid = '$cid'");
	} 
	if (isset($_POST['medYes'])) {
		mysql_query("UPDATE functional_needs SET medSup = '1' WHERE cid = '$cid'");
	} 
	if (isset($_POST['transYes'])) {
		mysql_query("UPDATE functional_needs SET transp = '1' WHERE cid = '$cid'");
	} 
	if (isset($_POST['homeYes'])) {
		mysql_query("UPDATE functional_needs SET homeCare = '1' WHERE cid = '$cid'");
	} 
	if (isset($_POST['prepYes'])) {
		mysql_query("UPDATE functional_needs SET prescription = '1' WHERE cid = '$cid'");
	} 
	if (isset($_POST['mentYes'])) {
		mysql_query("UPDATE functional_needs SET mental = '1' WHERE cid = '$cid'");
	} 
	if (isset($_POST['visYes'])) {
		mysql_query("UPDATE functional_needs SET vision = '1' WHERE cid = '$cid'");
	} 

	header("Location: additionalCommentsPage.php");
?>
</body>

</html>
