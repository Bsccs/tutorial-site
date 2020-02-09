<!DOCTYPE html>
<html>
<head>
	<title>tutorial site</title>
</head>
<body>
<h1>Inspector Details</h1>
<?php
include "classes/admin.php";
include "connect.php";  
 	$admin1=new admin($connection);
 	$admin1->view_inspctr_details();
 	?>
</body>
</html>