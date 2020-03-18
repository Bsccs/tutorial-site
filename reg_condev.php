
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
    $reg1->add_contentdev($_POST['name'],$_POST['email'],$_POST['expertise'],$_FILES,$_POST['password']);


       
 }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>tutorial site</title>
</head>
<body>
	<h1>Register as Content Developer</h1>
<form enctype="multipart/form-data" method="post" action="" accept-charset='UTF-8' >
	Name:<input type="text" name="name"><br><br>
	Email:<input type="text" name="email"><br><br>
	Password:<input type='password' name='password' id='password' maxlength="15" /><br><br>
	Qualification document:<input type="file" name="document" id="document" > <!-- upload documents -->
	<br><br>
	Expertise:<input type="text" name="expertise">(put comma and write . example java,php, etc)<br><br>
	<input type="submit" name="submit" value="Register">
</form>
</body>
</html>

