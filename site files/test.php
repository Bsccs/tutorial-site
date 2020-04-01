
<?php
// sesion_start();
  include "session.php";
include'includes/header.php'?>

	<!-- main content opening -->


<?php
 

include "connect.php";
include "classes/content.php";

$con1=new content($connection);
?>
<!DOCTYPE html>
<html>
<head>
	<title>tests</title>
</head>
<body>
		<table border="1" size="80%">
			<?php 
			
			//$id=$_SESSION['id'];
			$id=1;
			$sql="SELECT content_id,content_name FROM content WHERE developer_id='$id'";
            $result=mysqli_query($connection,$sql);
            while($row = mysqli_fetch_assoc($result)) 
            {
            	$tp=$row['content_id'];	
            	$_SESSION['temp']=$tp;
            
			?>
			<tr><form method="post" action="uploadingtest.php">
				<td><?php echo $row['content_name']; ?></td>
				<td>Enter number of questions:<input type="text" name="number"><br>	
				<input type="submit" name="submit">Upload test</button></td>
				</form>
			</tr>
			<?php
			}
			?>
		</table>
	

</body>
</html>


	<!-- main content closing -->

<?php include'../content-provider/includes/footer.php'?>
