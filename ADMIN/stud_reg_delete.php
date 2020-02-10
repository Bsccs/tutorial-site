<?php 
	include'connection.php';
	$login_id=$_GET['l_id'];
	mysqli_query($connection,"DELETE FROM `student_registration` WHERE login_id='$login_id'");
	echo "<script>alert(' deletion succesfully');</script>";
	echo"<script>window.history.back();</script>";
?>