<<<<<<< HEAD
<?php
include "../site files/connect.php";
// include "../site files/session.php";
$_SESSION['id']=1;
$id=$_SESSION['id'];
		$sql="SELECT name,admin_aproved FROM content_developer WHERE developer_id='$id'";
        $result=mysqli_query($connection,$sql);
        if($result)
        {	while($row=mysqli_fetch_assoc($result))
        	{
        		// echo "hii";
        		$name=$row['name'];
        		$approved=1;/*$row['admin_aproved'];*/
        	}
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>content developer</title>
</head>
<body>
<center><h1>Content Developer</h1></center>
<h2>Welcome <?php echo $name; ?></h2>
<?php if($approved==0)
{
	echo "Dear Developer You have not yet been aproved by the admin";
}
else
{?>
<button onclick="window.location.href = '../site files/addvideo1.php'";>Upload Content
</button>

<?php
?>
<button onclick="window.location.href = '../site files/test.php'";>Upload Tests
</button>


<button onclick="window.location.href = '../site files/suggest.php'";>View Feedback
</button>


<button onclick="window.location.href = '../site files/suggest.php'";>Suggest Content
</button>


</body>
</html>
<?php 
}
?>
=======
<?php include'includes/header.php'?>

	<!-- main content opening -->






	<!-- main content closing -->

<?php include'includes/footer.php'?>
>>>>>>> b64acf0d6207a34d8d1cbcdf6b0b50a289d488f6