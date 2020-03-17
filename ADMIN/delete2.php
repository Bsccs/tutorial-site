<?php 
	include'connection.php';
	$developer_id=$_GET['l_id'];
	mysqli_query($connection,"DELETE FROM `content_developer` WHERE developer_id='$developer_id'");
	echo "<script>alert(' deletion succesfully');</script>";
	echo"<script>window.history.back();</script>";
?>