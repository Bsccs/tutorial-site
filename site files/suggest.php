<?php include'../content-provider/includes/header.php'?>

	<!-- main content opening -->

<?php
// include "../site files/session.php";
include "connect.php";
include "classes/contentdev.php";
$_SESSION['id']=1;
if (isset($_POST['submit']))
{ 
$con_dev=new contentdev($connection);
$con_dev->suggest($_POST['suggestion'],$_SESSION['id']);
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
</form>
</body>
</html>


	<!-- main content closing -->

<?php include'includes/footer.php'?>