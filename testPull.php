<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
	
	$result = mysql_query("SELECT * FROM personal_info WHERE cid = '$cid'");
	$applicantName = mysql_query("SELECT firstname, lastname FROM personal_info WHERE cid='$cid'");
    $fname = mysql_result($applicantName, 0, firstname);
    $lname = mysql_result($applicantName, 0, lastname);
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
	You are now viewing <?php echo"{$fname} {$lname}"?>'s transcript. <br>
</body>

</html>
