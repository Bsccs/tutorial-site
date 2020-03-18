<?php

include "connect.php";
	include "classes/content.php";
	$obj1=new content($connection);
// include "session.php";
session_start();

if(isset($_POST['submit']))
{	
	$conid=$_SESSION['temp'];
	unset($_SESSION['temp']);
	
	$number=$_SESSION['number'];
	unset($_SESSION['number']);

	$varNames = array_keys($_POST);
	$var = array();

	foreach($varNames as $value) 
	{
        $var[$value] = $_POST[$value];
    }

/*    foreach($var as $key=>$value) 
    {
        echo '$var["'.$key.'"] = '.$value.'<br />';
    }*/
 
    
	
	$obj1->add_test($var,$conid,$number);

}
?>

