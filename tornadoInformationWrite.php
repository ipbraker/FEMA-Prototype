<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Tornado Information Write</title>
</head>

<body>
<?php
	
	$comm = $_POST['dam'];
	mysql_query("INSERT into disaster_info (cid, comDam) VALUES ('$cid', '$comm')");
	
	if (isset($_POST['powYes'])) {
		mysql_query("UPDATE disaster_info SET powLn = '1' WHERE cid = '$cid'");
	} 
	if (isset($_POST['contYes'])) {
		mysql_query("UPDATE disaster_info SET contDoe = '1' WHERE cid = '$cid'");
	} 
	if (isset($_POST['fallenYes'])) {
		mysql_query("UPDATE disaster_info SET treesFall = '1' WHERE cid = '$cid'");
	} 
	header("Location: personalDamagesCheck.php");


?>
</body>

</html>