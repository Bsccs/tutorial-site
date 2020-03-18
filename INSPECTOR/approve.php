<?php
	include_once('../site files/classes/inspector.php');
include "connect.php";
$approve=new inspector($connection);
$approve_id=$_GET['pst_id'];
$ret=$approve->approve_content($approve_id);
header("location: approval.php");

?>