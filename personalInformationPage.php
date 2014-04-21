<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php 
	session_start();
	session_register("cid");
	$cid = rand(0,500);
	
	include("config.php"); //including config.php in our file
	
	?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Personal Information Page</title>
</head>

<body>



 <! This is the first header that I am going to use>
  <div id="header"><h2 class="sansserif">FEMA Disaster Relief Application</h2></div>
  
  <div align="center"> Please enter the following information:</div>
  <?php  	echo "Application number = $cid" ;  ?>
	  <form action="personalInformationWrite.php" method="post">
		First name: <input type="text" name="firstname">
		Last name: <input type="text" name="lastname"><br>
		Social Security Number: <input type="text" name="ssn"><br>
		Date of Birth: <input type="text" name="dob"><br>
		Primary Language: <input type="text" name="lang"><br>
		Phone Number: <input type="text" name="phone"><br>
		Email: <input type="text" name="email"><br>
		<input type="submit" value="Continue Application">
	</form>
  
</body>

</html>
