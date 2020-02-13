<?php

function clean($string) /*to clear strings- unneccery inputs which are not required*/
{
	return htmlentities($string); 

}

function redirect($location)
{
	return header("location:{$location}");
}

function set_message($message)  /*set messages in session */
{
	if(!empty($message)){
		$_SESSION['message']=$message;
	}
	else {
		$message="";
	}

}   

function display_message() /*to display message*/
{
	if(isset($_SESSION['message']))
	{
		echo $_SESSION['message'];
		unset($_SESSION['message']);  /*message will not stay in it if unset is used*/
	}

} 
 
function token_generator()   /* to make form more secure*/
{
	$token=$_SESSION['token']=md5(uniqid(mt_rand(),true));
	return $token;

}     

/*function email_exists($email)  for email existing function.
{
	$sql="SELECT student_id FROM `student_details` WHERE email='$email'";
	$result=query($sql); 
	if(row_count($result)==1)
	{
		return true;
	}
	else{
		return false;
	}

}*/

function reg_user()
{
	if(isset($_POST['register-submit']))
	{
	$name=$_POST['username'];

	$email=$_POST['email'];

	$gender=$_POST['gender'];

	$country=$_POST['country'];

	$state=$_POST['state'];

	$phone=$_POST['phone'];

	$age=$_POST['age'];

	$Password=$_POST['password'];

	$Password=md5($Password);

	$sql="INSERT INTO `student_details`(`name`, `gender`, `country`, `state`, `phone_number`, `age`) 
	VALUES ('$name','$gender','$country','$state','$phone','$age')";
	



	}

?>


<!-- registartion page validation -->
<!-- <script type="text/javascript">
	
	function reg_valid()
	{
		
		var email=document.getElementById('email').value;

		var name=document.getElementById('username').value;

		var gender=document.getElementById('gender').value;

		var country=document.getElementById('country').value;

		var state=document.getElementById('state').value;
		
		var phone=document.getElementById('phone').value;
		
		var age=document.getElementById('age').value;	
		
		var Password=document.getElementById('password').value;


		if(email==""|| email.indexOf('@')==-1 || email.indexOf('.')==-1)
		{
			document.getElementById('sp1').innerHTML="mail@gmail.com required";
			return false;
		}

		if(name=="")
		{
			document.getElementById('sp2').innerHTML="fullname required";
			return false;
		}

		if(gender=="")
		{
			document.getElementById('sp3').innerHTML="Gender required";
			return false;
		}

		if(country=="")
		{
			document.getElementById('sp4').innerHTML="country required";
			//alert('name required');
			return false;
		}

		if(state=="")
		{
			document.getElementById('sp5').innerHTML="state required";
			//alert('name required');
			return false;
		}


		if(phone=="" || isNaN(phone) || phone.length>10)
		{
			document.getElementById('sp6').innerHTML="mobile number required";
			return false;
		}

		if(age=="")
		{
			document.getElementById('sp7').innerHTML="age required";
			//alert('name required');
			return false;
		}
		
		if(Password=="")
		{
			document.getElementById('sp8').innerHTML="password required";
			//alert('name required');
			return false;
		}


	}

	/*login validation*/
	function login_page()
	{
		var email=document.getElementById('email').value;
		var Password=document.getElementById('password').value;

		if(email==""|| email.indexOf('@')==-1 || email.indexOf('.')==-1)
		{
			document.getElementById('sp1').innerHTML="mail@gmail.com required";
			return false;
		}
				if(Password=="")
		{
			document.getElementById('sp8').innerHTML="password required";
			//alert('name required');
			return false;
		}



	}

</script> -->
