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

function validation_errors($message){
					$message = <<<DELIMITER
	<div class="alert alert-warning alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<strong>Warning!</strong> $message
	</div>
DELIMITER;

	return $message;
}


function email_exists($email)  /*for email existing function.*/
{
	$sql="SELECT login_id FROM `login` WHERE email='$email'";
	$result=query($sql);
	if(row_count($result)==1)
	{
		return true;
	}
	else{
		return false;
	}

}




/*validation function*/

function validate_user_registartion()
{
	$errors=[];
/*$error=[];*/
	$min=3;
	$max=20;


	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		/*echo "it works";*/
		$email=clean($_POST['email']);						/*clean-is used to remove unwanted character*/
		$username=clean($_POST['username']);
		$gender=clean($_POST['gender']);
		$country=clean($_POST['country']);
		$state=clean($_POST['state']);
		$phone=clean($_POST['phone']);
		$age=clean($_POST['age']);
		$password=clean($_POST['password']);


		if(strlen($username) < $min){
			$errors[]="your USERNAME cannot be less than {$min} character";
		}
				if(strlen($username) > $max){
			$errors[]="your USERNAME cannot be more than {$max} character";
		}


		if(strlen($country) < $min){
			$errors[]="your COUNTRY cannot be less than {$min} character";
		}
				if(strlen($country) > $max){
			$errors[]="your COUNTRY cannot be greater than {$max} character";
		}

		if(strlen($state) < $min){
			$errors[]="your STATE cannot be less than {$min} character";
		}
				if(strlen($state) > $max){
			$errors[]="your STATE cannot be greater than {$max} character";
		}
		if(email_exists($email)){
			$errors[]="email already exists";

		}


		if(!empty($errors)){
			foreach ($errors as $error ) {
				echo validation_errors($error);


			}
		}
	}
}

function register_user($email,$username,$gender,$country,$state,$phone,$age,$password){
	$email=escape($email);
	$username=escape($username);
	$gender=escape($gender);
	$country=escape($country);
	$state=escape($state);
	$phone=escape($phone);
	$age=escape($age);
	$password=escape($password);

if(email_exists($email))
{
	return false;
}
	else
	{

		$password=md5($password);
		
		$sql="INSERT INTO `login`(`email`, `password`, `role`)"; 
		$sql.="VALUES('$email','$password','student')";
		$result=query($sql);
		confirm($result);
		set_message("<p class='bg-success text-center'>check your email for activation</p>");
		redirect("index.php");
		
		/*$lid=mysqli_insert_id();*/
		/*$sql2="INSERT INTO `student_details`(`login_id`, `name`, `gender`, `country`, `state`, `phone_number`, `age`) VALUES('$lid','$username','$gender','$country','$state','$phone','$age')";*/
		/*$sql.="VALUES('$lid','$username','$gender','$country','$state','$phone','$age')";*/
		
		/*$result2=query($sql2);
		confirm($result2);*/
		


	}




}

/*    $sql = "select id from table where email LIKE $email AND password LIKE $Password";  
 
 $stmt = mysqli_query( $conn_blitz_quiz, $sql );
 if( $stmt === false) {
     die( print_r( sqlsrv_errors(), true) );
    
 }else{

$row = mysqli_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)
$id=$row['id'];
 }

*/

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
