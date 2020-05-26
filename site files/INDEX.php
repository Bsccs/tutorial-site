<?php session_start();
        include'includes/header.php'?>

	<!-- main content opening -->


<?php
//var_dump($_SESSION);

include "connect.php";
// include "session.php";
// $_SESSION['id']=1;  // check
$id=$_SESSION['id'];

        $sql="SELECT name1,admin_aproved FROM content_developer WHERE developer_id='$id'";
       // echo $sql;
        $result=mysqli_query($connection,$sql);
        if($result)
        {       while($row=mysqli_fetch_assoc($result))
                {
                      //   echo "hii";
                        $name=$row['name1'];
                        /*$approved=1;*/ // check
                        $approved=$row['admin_aproved'];
                }
        
?>
<!DOCTYPE html>
<html>
<head>
        <title>CONTENT DEVELOPER</title>
</head>
<body>
<center><h1><u>CONTENT DEVELOPER</u></h1></center><BR><br>
<h2>WELCOME <?php echo $_SESSION['name1']; ?></h2>
<br>
<?php if($approved==0)
{
        echo "Dear Developer You have not yet been aproved by the admin";
}
else
{?>
<button onclick="window.location.href = 'addvideo1.php'";>Upload Content
</button>

<button onclick="window.location.href = 'test.php'";>Upload Tests
</button>


<button onclick="window.location.href = 'suggest.php'";>Suggest Content
</button>

<button onclick="window.location.href = ''";>View Feedback
</button>


<?php 
}
?>
<BR>
<br>
<h5>INSTRUCTIONS:</h2>

</body>
</html>

<?php } ?>

	<!-- main content closing -->

<?php include'includes/footer.php'?>

