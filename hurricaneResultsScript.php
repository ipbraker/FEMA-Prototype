<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Hurricane Results Script</title>
</head>

<body>
WORKING SO FAR.....

<?php

	$hurrStopTime = $_POST['hurrStopTime'];
	if(isset($_POST['stopYes']) && $_POST['stopYes'] == 'Yes') {
		header("Location: stopYesWorks!php");
	}
	
	

?>
</body>

</html>
