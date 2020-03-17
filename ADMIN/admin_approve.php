<?php
	include_once('../site files/classes/admin.php');
include "connect.php";
$admin_approve=new admin($connection);
$approve_id=$_GET['pst_id'];
$ret=$admin_approve->approve_dev($approve_id);
header("location: develop_details.php");

?>