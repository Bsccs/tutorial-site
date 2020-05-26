<?php
session_start();
 //include "session.php";
 include'includes/header.php'?>

	<!-- main content opening -->

<?php

include "connect.php";
include "classes/contentdev.php";
$id=$_SESSION['id'];
if (isset($_POST['submit']))
{ 
$con_dev=new contentdev($connection);
$con_dev->suggest($_SESSION['id'],$_POST['suggestion'],'$date');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>suggest</title>
</head>
<body>
	<br>
Do you have a video on any new content that is not listed in our domain ?
Please tell us about it briefly(30 words) 
<form action="" method="post" name="form1">
	<textarea name="suggestion" maxlength="155" cols="50" rows="5"></textarea>
	<br>
	<input type="submit" name="submit">
	<a href="INDEX.php"><input type="button" value="CANCEL"></a>
</form>
</body>
</html>


	<!-- main content closing -->

<?php include'includes/footer.php'?>