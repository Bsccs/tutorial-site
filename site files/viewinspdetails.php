<!DOCTYPE html>
<html>
<head>
	<title>tutorial site</title>
</head>
<body>
<h1>Inspector Details</h1>
<?php
include("classes/admin.php");
 	$connection=mysqli_connect("localhost","root","","hackerzdom");
        if (!$connection)
        die("Connection failed: " . mysqli_connect_error());
        else
        echo "Connected successfully";
                
  
 	$admin1=new admin($connection);
 	$admin1->view_inspctr_details();
 	?>
</body>
</html>