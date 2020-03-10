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






	/*		if(empty($username)){
			$errors[]="your USERNAME cannot be empty";
		}
*/



/*		if($password=$confirm_password){
			$errors[]="your password does not match";

		}
*/


/*		if(empty($email)){
			$errors[]="your EMAIL cannot be empty";
		}

				if(empty($gender)){
			$errors[]="your GENDER cannot be empty";
		}

						if(empty($country)){
			$errors[]="your COUNTRY cannot be empty";
		}
						if(empty($state)){
			$errors[]="your STATE cannot be empty";
		}
						if(empty($phone)){
			$errors[]="your PHONE cannot be empty";
		}
								if(empty($age)){
			$errors[]="your AGE cannot be empty";
		}
								if(empty($password)){
			$errors[]="your PASSWORD cannot be empty";
		}
*/



/*		$message = <<<DELIMITER
	<div class="alert alert-warning alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<strong>Warning!</strong> $error
	</div>
DELIMITER;
echo $message;*/




				/*$message=<<<DELIMITER*/

	/*DELIMITER;*/

	/*echo $error;*/