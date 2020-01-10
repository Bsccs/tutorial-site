<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['user_id']))
{
	header('location:index.php');
}
$login_id=$_SESSION['user_id'];


//echo"SELECT * FROM `registration_table` WHERE login_id='$login_id'";
//echo $login_id;
$array_data=mysqli_query($connection,"SELECT * FROM `registration_table` WHERE login_id='$login_id'");

$user_details=mysqli_fetch_assoc($array_data);
//var_dump($user_details);
?>

<html>
<head>
	<title>form log</title>
</head>
<body>
<table border="2">
<tr>
<td>Name</td>
<td><?php echo $user_details['name']; ?></td>
</tr>
<tr>
<td>
Phone
</td>
<td><?php echo $user_details['Phone']; ?></td>
</tr>
<tr>
<td>
Email
</td>
<td><?php echo $user_details['Email']; ?></td>
</tr>
<tr>
<td>
Gender
</td>
<td><?php echo $user_details['Gender']; ?></td>
<tr>
<td>
District
</td>
<td><?php echo $user_details['district']; ?></td>
</tr>
<tr>
<td>
address
</td>
<td><?php echo $user_details['Address']; ?></td>
</tr>
<tr>
<td>
Photo
</td>
<td>photo</td>
</tr>
<tr>
<td>
Qualification
</td>
<td><?php echo $user_details['Qualification']; ?></td>
</tr>
<tr>
<td>
Username
</td>
<td><?php echo $user_details['Username']; ?></td>
</tr>
<tr>
<td>
Password
</td>
<td><?php echo $user_details['Password']; ?></td>
</tr>
</td>
</tr>
</table>
<a href="logout.php">logout</a>
</body>
</html>
