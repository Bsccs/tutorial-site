
<?php

echo $_POST['name'];
$file=$_FILES["document"];
print_r($file);


if (isset($_POST['submit']))
{
  //  include "classes/registration.php";
    include "connect.php";
   /* $reg1=new registration($connection);              
    $reg1->add_contentdev($_POST['name'],$_POST['email'],$_POST['expertise'],$_FILES);
*/

        $target_path="uploads/";
        $target_path=$target_path.basename($_FILES['document']['name']);
        if(move_uploaded_file($_FILES["document"]["tmp_name"],$target_path)) 
        {
            $sql="INSERT INTO `content_developer` VALUES (NULL,'".$_POST['name']."',".$_POST['email']."','".$target_path."','expertise','');";
            $result=mysqli_query($connection,$sql);
            if($result)
            { 
                echo "successfully registered";
            }
            echo "<img src='$target_path' height='280' width='320'";
        }
 }


