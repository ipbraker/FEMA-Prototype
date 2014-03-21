<?php 
	session_start();
	echo"Session continued";
	
	include("config.php"); //including config.php in our file
	
	?>


<html>
<body>
Results from Form<br><br>

First name: <?php echo $_POST["firstname"]; ?><br>
Last name: <?php echo $_POST["lastname"]; ?><br>
Social Security Number: <?php echo $_POST["ssn"]; ?><br>
Date of Birth: <?php echo $_POST["dob"]; ?><br>
Primary Language: <?php echo $_POST["lang"]; ?><br>
Phone Number: <?php echo $_POST["phone"]; ?>

</body>
</html>