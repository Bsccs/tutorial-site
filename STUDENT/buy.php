<?php 
session_start();
include'../content-provider/includes/header.php'
?>

	<!-- main content opening -->

<?php


// include "session.php";
  include '../site files/connect.php';
  include '../site files/classes/student.php';
  $stud2=new student($connection);

/*$_SESSION['id']=2;*/  // check
  /* $sql="SELECT content_name FROM content WHERE inspector_approved=1 AND content_depth=".$_SESSION['templevel']." AND content_id NOT IN (SELECT content_id FROM student_log WHERE student_id='".$_SESSION['id']."'";*/

$sql="SELECT content_id,content_name FROM content WHERE inspector_approved=1 AND content_depth=".$_SESSION['templevel'];

   $result=mysqli_query($connection,$sql);
   
     
?>
<!DOCTYPE html>
<html>
<head>
	<title>buy videos</title>
</head>
<body>

<h1>Videos you can buy</h1><br><br>
	<table border="1">
	<?php

 	 while($row = mysqli_fetch_row($result)) 
     	{
    
 	     $video=$row[1];
	?>
    
    <tr>
    <td><?php echo "$video"; ?></td>
    <td><form method="post" action="">
		<input type="hidden" name="conid" value=$row[0]>
    	<input type="submit" name="submit" value="Buy"></td>
    </form>
</td>
    </tr>
<?php  }  ?>

    </table>
</form>


</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $stud2->buy($_POST['conid']);
   
}


?>


	<!-- main content closing -->

<?php include'includes/footer.php'?>