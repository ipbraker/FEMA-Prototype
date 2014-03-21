<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	session_start();

	include("config.php"); //including config.php in our file
?>
	
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Personal Information Write</title>
</head>

<body>
BEGINNING PHP....With the variables<br />
<br>

<?php
	//$table = "personal_info";

	//create the CID to equal the Session number
	//int rand(0,500)
	//$_SESSION['cid'] = rand;
	//$cid = $_SESSION['cid'];
	
	//pull the inputs from form into variables
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$ssn = $_POST['ssn'];
	$dob = $_POST['dob'];
	$lang = $_POST['lang'];
	$phone = $_POST['phone'];
		
	//write to the SQL database
	mysql_query("INSERT INTO personal_info (firstname, lastname, ssn, dob, lang, phone) VALUES ('$firstname','$lastname','$ssn','$dob','$lang','$phone')"); 	
	
	//header("Location: writeCorrectlyTest.php"); /* Redirect browser */
	//echo redirecting...

?>

THROUGH THE PHP....HOPE IT WROTE
</body>

</html>
