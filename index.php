<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <title>HACKERZDOM</title>
  </head>

  <body>
 	<?php include 'top-navigation.php'?>

  <?php include 'flip-level.php'?>
	</div>
  </body>
</html>

<?php
include 'connection.php';


exit();
session_start();
if(isset($_SESSION['user_id']))
{
  header('location:dashboard.php');
}

if(isset($_POST['button']))
{
  $Username=$_POST['usename'];
  $Password=$_POST['password'];
  $result=mysqli_query($connection,"SELECT * 
  FROM `login` WHERE  Username ='".$Username."'AND Password ='".$Password."'");
  if(mysqli_num_rows($result)==1)
  {
    $row_data=mysqli_fetch_assoc($result);

    $_SESSION['user_id']=$row_data['login_id'];


        header('location:dashboard.php');
    }
    else
  {
        echo" <script> alert('You Have Entered Incorrect Password!');</script>";
        exit();
    }

}
?>

