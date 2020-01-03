<html>
<head>
<title>LOGIN</title>
<body>
<form method="post" enctype="multipart/form-data" >
Username:<input type="text" name="usename"><br><br>
Password:<input type="password" name="password"><br><br>
<input type="submit" value="regist" name="button"><br><br>
</form>
</body>
<html>

<?php
include 'connection.php';
session_start();
if(isset($_POST['button']))
{
	$Username=$_POST['usename'];
	$Password=$_POST['password'];
	$result=mysqli_query($connection,"SELECT * 
	FROM `registration_table` WHERE  Username ='".$Username."'AND Password ='".$Password."'");
	if(mysqli_num_rows($result)==1)
	{
		$row_data=mysqli_fetch_assoc($result);

		$_SESSION['user_id']=$row_data['login_id'];


        header('location:logtable.php');
    }
    else
	{
        echo" <script> alert('You Have Entered Incorrect Password!');</script>";
        exit();
    }

}
?>

