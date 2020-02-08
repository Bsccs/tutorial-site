<?php
// phpinfo();
 
include"classes/admin.php";

if (isset($_POST['submit']))
 {
 	$connection=mysqli_connect("localhost","root","","hackerzdom");
        if (!$connection)
        die("Connection failed: " . mysqli_connect_error());
        else
        echo "Connected successfully";
                
  
 	$admin1=new admin($connection);
	$admin1->add_inspector($_POST['name'],$_POST['email']);
 }

mysqli_close($connection);


