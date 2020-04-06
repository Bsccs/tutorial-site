<?php 
	include'connect.php';
	$login_id=$_GET['l_id'];
	mysqli_query($connection,"DELETE FROM `inspector` WHERE login_id='$login_id'");
	mysqli_query($connection,"DELETE FROM `login` WHERE login_id='$login_id'");
	echo "<script>alert(' deletion succesfully');</script>";
	echo"<script>window.location='insp_details.php';</script>";
?>