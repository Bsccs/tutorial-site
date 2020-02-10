<!DOCTYPE html>
<html>
<head>
	<title>tutorial site</title>
	<style>
.iframe-container{
  position: relative;
  width: 100%;
  padding-bottom: 56.25%; 
  height: 0;
}
.iframe-container iframe{
  position: absolute;
  top:0;
  left: 0;
  width: 90%;
  height: 90%;

</style>
</head>
<body>
<h1>Content Developer</h1>

<?php
	include "classes/admin.php";
  	include "connect.php";
 	$admin1=new admin($connection);

	$dev1=new contentdev($connection);
	$dev1->approve_content;
?>
</body>
</html>