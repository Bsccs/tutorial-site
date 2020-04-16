<?php 
	include'connect.php';
	$content_id=$_GET['l_id'];
	mysqli_query($connection,"DELETE FROM `content` WHERE `content_id`='$content_id'");	
	echo "<script>alert('deletion succesfully');</script>";
	echo"<script>window.location='approval.php';</script>";
?>