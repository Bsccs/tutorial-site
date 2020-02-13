
<?php

/*echo $_POST['name'];
$file=$_FILES["document"];
print_r($file);
*/

if (isset($_POST['submit']))
{
    include "classes/registration.php";
    include "connect.php";
    $reg1=new registration($connection);              
    $reg1->add_contentdev($_POST['name'],$_POST['email'],$_POST['expertise'],$_FILES);


       
 }


