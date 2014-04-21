<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>County Verification Script</title>
</head>

<body>
WORKING SO FAR!!! HOPE IT DOES IT ALL CORRECTLY

<?php

	global $cid;

	$countyPost = $_POST['county'];
	$statePost = $_POST['state'];
	
	$disCheck = "SELECT county, state FROM disaster_primary WHERE county = '$countyPost' and state = '$statePost'";
	$disInsert = "update personal_info set county = '$countyPost', state = '$statePost' where cid = '$cid'";
	
	$qry = mysql_query($disCheck);
	$num_rows = mysql_num_rows($qry);     

	if ($num_rows > 0) { 
		//Updated the personal information table with disaster county and state
 		mysql_query("UPDATE personal_info SET county = '$countyPost', state = '$statePost' WHERE cid ='$cid'");
 			
//INSERT PART ONLY FOR DEMO 01 APR 2014 HERE

	if ($countyPost == 'Nassau' || $countyPost == 'Harrison'){
		header("Location: hurricaneInformationPage.php");
	} else{
		if ($countyPost == 'El Paso') {
			header("Location: fireInformationPage.php");
		} else {
			if ($countyPost == 'Cleveland') {
				header("Location: tornadoInformationPage.php");
			} else {
			}
		}
	}
	

//DEMO SECTION FINISHED

		
  	} else{
		header("Location: error.php");
	}

?>
</body>

</html>
