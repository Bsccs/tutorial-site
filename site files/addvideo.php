<?php
if (isset($_POST['submit'])) 
{ 
	include "classes/content.php";
	include "connect.php";
	$tags=array($_POST['tag1'],$_POST['tag2'],$_POST['tag3'],$_POST['tag4']);
	// print_r($tags);
	//echo "check";
	//echo $_POST['depth'];
	//echo "check";
	$content1=new content($connection);
	$content1->add_video($_POST['embedvideo'],$_POST['depth'],$tags);

}
?>



