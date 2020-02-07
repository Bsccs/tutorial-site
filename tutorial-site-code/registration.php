<!--HTML FILE -->

<html>
<head>

<title>form</title>

<body>

<form method="post" enctype="multipart/form-data" >

Name:<input type="text" name="firstname" id="firstname"><span id="sp1" style="color:red"></span><br><br>

Email:<input type="email" name="email" id="email"><span id="sp2" style="color:red"></span><br><br>

Address:<textarea name="address"  row="10" col="10" id="txtaddress"></textarea><span id="sp3" style="color:red"></span><br><br>

Phone:<input type="text" name="phone" id="phone"><span id="sp4" style="color:red"></span><br><br>

Gender:<input type="radio" name="gender" value="male">Male
       <input type="radio"name="gender" value="female">Female<span id="sp5" style="color:red"></span><br><br>
	   
Qualification:<input type="checkbox" value="sslc" name="Qualification[]">sslc
              <input type="checkbox" value="plus _two" name="Qualification[]">plus_two
              <input type="checkbox" value="degree" name="Qualification[]">degree
              <input type="checkbox" value="pg" name="Qualification[]">pg<span id="sp6" style="color:red"></span><br><br>
			  
photo:<input type="file" name="photo"id="photo"><span id="sp7" style="color:red"></span><br><br>

district: <select name="select"id="select">
<option value="wayanad">Wayanad</option>
<option value="kozikode"> Kozhikode</option>
<option value="kannur">Kannur</option>
<option value="malapuram">Malappuram</option>
</select><span id="sp8" style="color:red"></span><br><br>

Username:<input type="text" name="usename" id="usename"><span id="sp9" style="color:red"></span><br><br>

Password:<input type="password" name="password"id="password"><span id="sp10" style="color:red"></span><br><br>

<input type="submit" value="regist" onclick="return valid();" name="button" id="submit"><br><br>

</form>
</body>
<html>


<!--JAVASCRIPT FILE -->

<script type="text/javascript">
	
	function valid()
	{
		var name=document.getElementById('firstname').value;

		var email=document.getElementById('email').value;

		var add= document.getElementById('txtaddress').value;
		/*alert(add);*/

		var Phone=document.getElementById('phone').value;
	
		var Gender=document.getElementsByName('gender');
		
		var Qualification=document.getElementsByName('Qualification[]');
		
		var photo=document.getElementById('photo').value;
		
		var district=document.getElementById('select').value;
		
		var Username=document.getElementById('usename').value;
		
		var Password=document.getElementById('password').value;
		
		

		if(name=="")
		{
			document.getElementById('sp1').innerHTML="------>name required";
			//alert('name required');
			return false;
		}

		if(email==""|| email.indexOf('@')==-1 || email.indexOf('.')==-1)
		{
			document.getElementById('sp2').innerHTML="----->email required";
			//alert('email required');
			return false;
		}

		if(add=="")
		{
			document.getElementById('sp3').innerHTML="----->address required";
			//alert('name required');
			return false;
		}
		


		if(Phone=="" || isNaN(Phone) || Phone.length>10)
		{
			document.getElementById('sp4').innerHTML="----->mobile number required";
			//alert('mobile number required');
			return false;
		}
		
		
		flag=0;
		for(i=0;i<Gender.length;i++)
		{
			if(Gender[i].checked==true)
			{
				flag=1;
				break;
			}
		}
		if(flag==0)
		{
			document.getElementById('sp5').innerHTML="------>select a gender ";

			return false;

		}

		flagb=0;
		for(i=0;i<Qualification.length;i++)
		{
			if(Qualification[i].checked==true)
			{
				flagb=1;
				break;
			}
		}
			if(flagb==0)
		{
			document.getElementById('sp6').innerHTML="---->select Qualification";

			return false;

		}

		if(photo=="")
		{
			document.getElementById('sp7').innerHTML="------>photo required";
			//alert('name required');
			return false;
		}
		if(district=="")
		{
			document.getElementById('sp8').innerHTML="------>district required";
			//alert('name required');
			return false;
		}
		if(Username=="")
		{
			document.getElementById('sp9').innerHTML="------>username required";
			//alert('name required');
			return false;
		}
		if(Password=="")
		{
			document.getElementById('sp10').innerHTML="------>password required";
			//alert('name required');
			return false;
		}


	}

</script>

<!--PHP FILE -->

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
	
	
//echo "INSERT INTO `registration_table`(`Email`, `Address`, `Phone`, `Gender`, `Qualification`, `photo`, `district`, `Username`, `Password`, `name`) 
//VALUES ('$email','$Address','$Phone','$Gender','$Qualification','$photo','$district','$Username','$Password','$name')";
//exit();	
mysqli_query($connection,"INSERT INTO `registration_table`(`Email`, `Address`, `Phone`, `Gender`, `Qualification`, `photo`, `district`, `Username`, `Password`, `name`) 
VALUES ('$email','$Address','$Phone','$Gender','$Qualification','$photo','$district','$Username','$Password','$name')");

	//echo $name."<br>".$email."<br>".$Address."<br>".
	//$Phone."<br>".$Gender."<br>".$Qualification."<br>".$photo."<br>".$district."<br>".$Username."<br>".$Password;
	}
		
?>



