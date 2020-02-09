<?php

 include "classes/admin.php";

if (isset($_POST['submit']))
 {
  	include "connect.php";
 	$admin1=new admin($connection);
	$admin1->add_inspector($_POST['name'],$_POST['email']);
 }

mysqli_close($connection);

?>



<!DOCTYPE html>
<html>
<head>
	<title>tutorial site</title>
</head>
<body>
	<h1>feedback form</h1>
	<form method="post">
		feedback:<br><textarea name="feedback" rows="30" cols="150"></textarea><br><br>
		<input type="submit" name="submit" value="Register">
		</form>
</body>
</html>


