<?php 
	include'connect.php';
	$inspector_id=$_GET['l_id'];
	mysqli_query($connection,"DELETE FROM `inspector` WHERE inspector_id='$inspector_id'");
	echo "<script>alert(' deletion succesfully');</script>";
	echo"<script>window.history.back();</script>";
?>