<?php

 include "classes/admin.php";

if (isset($_POST['submit']))
 {
  	include "connect.php";
 	$feedback=new fb&sugg($connection);
	$feedback->add_feedback($_POST['feedback']);
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
		<input type="submit" name="submit" value="add">
		</form>
</body>
</html>


