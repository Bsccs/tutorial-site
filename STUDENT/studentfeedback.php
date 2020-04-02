<?php 
$conid;
// session_start();
 include '../site files/session.php';

 include 'includes/header.php' ?>

	<!-- main content opening -->




<?php
//include 'session.php';

if (isset($_POST['submit']))
 {
 	echo "hiii";
 	if(isset($_POST['conid']))
 	{
 		echo "hiii2";
 	$conid=$_POST['contentid'];
 	echo $conid;
    }

 	if(isset($_POST['feedback']))
 	{
 		echo $conid;
 		include "../site files/connect.php";
 		include "../site files/classes/admin.php";
 		echo $_POST['feedback'];
 		//$feedback=new fb&sugg($connection);
		//$feedback->add_feedback($_POST['feedback']);

 		echo $_POST['feedback'];
 		mysqli_close($connection);
    }
 }

/* function do()
 {
 	echo $_POST['feedback'];
 	//$feedback=new fb&sugg($connection);
	//$feedback->add_feedback($_POST['feedback']);
 }*/



?>


<!DOCTYPE html>
<html>
<head>
	<title>tutorial site</title>
</head>
<body>
	<h1>feedback form</h1>
	<form method="post" action="">
		feedback:<br><textarea name="feedback" maxlength="155" cols="50" rows="5"></textarea><br><br>
		<input type="submit" name="submit" value="add" >
		</form>
</body>
</html>



	<!-- main content closing -->

<?php include'includes/footer.php'?>