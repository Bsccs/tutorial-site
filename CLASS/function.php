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


	$r1=mysqli_query($this->dbh,"INSERT INTO `student_details`(`login_id`, `email`, `name`, `gender`, `country`, `state`, `phone_number`, `age`) 
		VALUES ('$login_id','$uemail','$uname','$gender','$country','$state','$phone','$age')");
	return $r1;
	}

// Function for signin
public function signin($uemail,$pasword)
	{
	$result=mysqli_query($this->dbh,"SELECT * 
	FROM `login` WHERE  email ='".$uemail."'AND password ='".$pasword."'");
	return $result;
	}
/*public function findname($temp)
	{
		$result=mysqli_query($this->dbh,"select name from student_details where login_id='.$temp.'");
		return $result;
	}*/

}
?>