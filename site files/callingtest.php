<?php
//include "session.php";
session_start();
if(isset($_POST['submit']))
{	
	$conid=$_SESSION['temp'];
	unset($_SESSION['temp']);
	
/*	$varNames = array_keys($_POST);
	$var = array();*/
	foreach($varNames as $value) 
	{
        $var[$value] = $_POST[$value];
    }
    include "connect.php";
	include "classes/content.php";
	$con1=new content($connection);
	$con1->add_test($var,$conid);

}
?>
