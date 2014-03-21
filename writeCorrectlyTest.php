<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	session_start();

	include("config.php"); //including config.php in our file
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>YOU SUCCESSFULLY GOT HERE</title>
</head>

<body>
YOU SUCCESSFULLY GOT HERE!!! <br> <br>



<?php 
	
	mysql_query("INSERT INTO personal_info (firstname, lastname) VALUES ('test2','test2')");
	
	?>



HOPE IT WROTE CORRECTLY!!

</body>

</html>
