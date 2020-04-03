<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'hackerzdom');


class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}

// Function for registration
	public function registration($uemail,$uname,$gender,$country,$state,$phone,$age,$password)
	{
		$r1=mysqli_query($this->dbh,"INSERT INTO `login`(`email`, `password`, `role`) VALUES ('$uemail','$password','student')");

		$login_id=mysqli_insert_id($this->dbh);


	$r1=mysqli_query($this->dbh,"INSERT INTO `student_details`(`login_id`, `name`, `gender`, `country`, `state`, `phone_number`, `age`) 
		VALUES ('$login_id','$uname','$gender','$country','$state','$phone','$age')");
	return $r1;
	}



// Function for signin
public function signin($uemail,$pasword)
	{
	$result=mysqli_query($this->dbh,"SELECT `content_developer`.`name1`,`content_developer`.`developer_id`,`student_details`.`student_id`,`student_details`.`name`,`login`.`login_id`,`role`,`login`.`email`,`login`.`password` FROM `login` LEFT JOIN `student_details` ON `login`.`login_id` = `student_details`.`login_id` LEFT JOIN `content_developer` ON `login`.`login_id` = `content_developer`.`login_id` WHERE `login`.`email` ='".$uemail."'AND `login`.`password` ='".$pasword."'");
	
	return $result;
	}

	 public function contentdev_signin($email,$password,$name,$file_name,$expertise)
{		

	$r2=mysqli_query($this->dbh,"INSERT INTO `login`(`email`, `password`, `role`) VALUES ('$email','$password','con_developer') ");

	$login_id=mysqli_insert_id($this->dbh);

	$r2=mysqli_query($this->dbh,"INSERT INTO `content_developer`(`login_id`, `name1`, `quali_doc`, `expertise`) VALUES ('$login_id','$name','$file_name','$expertise')");

	return $r2;


}
public function pass_reset($email,$password)
{
	$r3=mysqli_query($this->dbh,"UPDATE `login` SET `password`='$password' WHERE `email`='$email'");
	return $r3;


}


}


?>