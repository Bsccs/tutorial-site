

<?php
include "classes/registration.php";
include "connect.php";
if (isset($_POST['submit']))
 {
  	include "classes/registration.php";
	include "connect.php";
 	/*$reg1=new registration($connection);				
	$reg1->add_contentdev($_POST['name'],$_POST['email'],$_POST['expertise'],$_FILES);*/


        $target_path="uploads/";
        $target_path=$target_path.basename($files['quali_doc_name']['name'])
        if(move_uploaded_file($files["quali_doc_name"]["temp_name"], $target_file)) 
        {
            $sql="INSERT INTO `content_developer` VALUES (NULL,'$name','$email','$target_path','expertise','');";
            $result=mysqli_query($this->connection,$sql);
            if($result)
            { 
                echo "successfully registered";}
            }
            echo "<img src='$target_path' height='280' width='320'";
        }
 }


