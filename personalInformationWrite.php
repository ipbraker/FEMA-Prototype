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
	$cid = $_SESSION['cid'];
	//echo $cid;
	?>
	
	CID HAS BEEN SET<br />
<br>
	
<?php	
	//pull the inputs from form into variables
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$ssn = $_POST['ssn'];
	$dob = $_POST['dob'];
	$lang = $_POST['lang'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
		
	if($firstname==''||$lastname==''||$ssn==''||$dob==''||$lang==''||$phone==''||$email==''){
        header("Location: ERROR.php");
    }
    else{      
	//write to the SQL database
	mysql_query("INSERT INTO personal_info (cid, firstname, lastname, ssn, dob, lang, phone, email) VALUES ('$cid','$firstname','$lastname','$ssn','$dob','$lang','$phone','$email')"); 	
	
	//echo redirecting...
	header("Location: disasterVerificationPage.php"); /* Redirect browser */
	}

?>

THROUGH THE PHP....HOPE IT WROTE
</body>

</html>
