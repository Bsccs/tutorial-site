<?php
session_start();
	include_once('../site files/classes/inspector.php');
include "connect.php";
$approve=new inspector($connection);
$approve_id=$_GET['pst_id'];
$lid=$_SESSION['login_id'];

$ret=$approve->approve_content($approve_id);
$approve_query=mysqli_query($connection,"SELECT inspector_approved FROM `content` WHERE content_id='$approve_id'");
$query=mysqli_fetch_assoc($approve_query);
$query=implode($query);
$result=mysqli_query($connection,"INSERT INTO `approvals`(`content_id`, `inspector_id`, `approved`) VALUES ('$approve_id','$lid','$query')");
$result1=mysqli_query($connection,"UPDATE `approvals` SET `approved`='$query' WHERE content_id='$approve_id'");
echo"<script>window.location='approval.php';</script>";

?>