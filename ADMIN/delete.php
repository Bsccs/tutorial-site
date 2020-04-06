<?php 
	include'connect.php';
	$login_id=$_GET['l_id'];
	mysqli_query($connection,"DELETE FROM `login` WHERE login_id='$login_id'");
	mysqli_query($connection,"DELETE FROM `content_developer` WHERE login_id='$login_id'");
	mysqli_query($connection,"DELETE FROM `student_details` WHERE login_id='$login_id'");
	
	echo "<script>alert(' deletion succesfully');</script>";
	echo"<script>window.history.back();</script>";
?>