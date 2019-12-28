<html>
<head>
<title>form</title>
<body>
<form method="post" enctype="multipart/form-data" >
Name:<input type="text" name="firstname"><br><br>
Email:<input type="email" name="email"><br><br>
Address:<textarea name="address"  row="10" col="10"></textarea><br><br>
Phone:<input type="phone" name="phone"><br><br>
Gender:<input type="radio" name="gender" value="male">Male
       <input type="radio"name="gender" value="female">Female<br><br>
Qualification:<input type="checkbox" value="sslc" name="Qualification[]">sslc
              <input type="checkbox" value="plus two" name="Qualification[]">plus two
              <input type="checkbox" value="degree" name="Qualification[]">degree
              <input type="checkbox" value="pg" name="Qualification[]">pg<br><br>
photo:<input type="file" name="photo"><br><br>
district: <select name="select">
<option value="wayanad">Wayanad</option>
<option value="kozikode"> Kozhikode</option>
<option value="kannur">Kannur</option>
<option value="malapuram">Malappuram</option>
</select><br><br>
Username:<input type="text" name="usename"><br><br>
Password:<input type="password" name="password"><br><br>
<input type="submit" value="regist" name="button"><br><br>
</form>
</body>
<html>

<?php
include 'connection.php';


if(isset($_POST['button']))
{
	$name=$_POST['firstname'];
	$email=$_POST['email'];
	$Address=$_POST['address'];
	$Phone=$_POST['phone'];
	$Gender=$_POST['gender'];
	$Qualification=$_POST['Qualification'];
	$Qualification=implode(",",$Qualification);
	$photo=$_FILES["photo"]["name"];
	$district=$_POST['select'];
	$Username=$_POST['usename'];
	$Password=$_POST['password'];
	
	
echo "INSERT INTO `registration_table`(`Email`, `Address`, `Phone`, `Gender`, `Qualification`, `photo`, `district`, `Username`, `Password`, `name`) 
VALUES ('$email','$Address','$Phone','$Gender','$Qualification','$photo','$district','$Username','$Password','$name')";
//exit();	
mysqli_query($connection,"INSERT INTO `registration_table`(`Email`, `Address`, `Phone`, `Gender`, `Qualification`, `photo`, `district`, `Username`, `Password`, `name`) 
VALUES ('$email','$Address','$Phone','$Gender','$Qualification','$photo','$district','$Username','$Password','$name')");



	
	//echo $name."<br>".$email."<br>".$Address."<br>".
	//$Phone."<br>".$Gender."<br>".$Qualification."<br>".$photo."<br>".$district."<br>".$Username."<br>".$Password;
	}
		


?>

