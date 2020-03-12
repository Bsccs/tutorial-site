<?php
	// include "session.php";	
session_start();
  include "classes/content.php";
  include 'connect.php';
  $content2=new content($connection);
 
?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>view content</title>
			<style>
				.iframe-container
				{
				  position: relative;
				  width: 50%;
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
            The videos available are:<br>
            <?php 
            $_SESSION['role']='inspector';
            $_SESSION['id']='2';
             $sql=$content2->view_content();
                $result=mysqli_query($connection,$sql);
                while($row = mysqli_fetch_assoc($result)) 
                {
                $embed=$row['content_name'];
                /*$embed="https://www.youtube.com/embed/Az26Fcdaz5E";*/
                echo $embed;
        echo "<br><br>";
            }
            ?>
		</body>
		</html>
