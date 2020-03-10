<?php
// phpinfo();
 
include "classes/admin.php";

if (isset($_POST['submit']))
 {
  	include "connect.php";
 	$admin1=new admin($connection);
	$admin1->add_inspector($_POST['name'],$_POST['email']);
 }

mysqli_close($connection);


?>