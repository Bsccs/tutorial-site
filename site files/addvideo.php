<?php
if (isset($_POST['submit'])) 
{ 
	include "classes/content.php";
	include "connect.php";
	$content1=new content($connection);
	$content1->add_video($_POST['embedvideo'],$_POST['depth'],$_POST['tags']);
}
?>