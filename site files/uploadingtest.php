<?php include'includes/header.php'?>

	<!-- main content opening -->

<?php
// include "session.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>uploading test</title>
<!-- <style>
div { 
  display: block;
}
</style> -->
</head>
<body>
<form action="callingtest.php" method="post">
	
<?php 
$_SESSION['number']=$_POST['number'];

?>
<br><br>
	<table border="1">
		<tr>
	<td>Question No.</td>
	<td>Question</td>
	<td>Option a</td>
	<td>Option b</td>
	<td>Option c</td>
	<td>Option d</td>
	<td>Correct option</td>
	<td>Difficulty</td>

</tr>
<?php
for($i=1;$i<=$_POST['number'];$i++)
{ ?>
<tr>
	<td><?php echo $i; ?></td>
	<td><input type="text" name="<?php echo "q".$i; ?>"/></td>
	<td><input type="text" name="<?php echo "opa".$i; ?>"/></td>
	<td><input type="text" name="<?php echo "opb".$i; ?>"/></td>
	<td><input type="text" name="<?php echo "opc".$i; ?>"/></td>
	<td><input type="text" name="<?php echo "opd".$i; ?>"/></td>
	<td><input type="text" name="<?php echo "crct".$i; ?>"/></td>
	<td><select id="cars" name="<?php echo "difficulty".$i; ?>">
  					 <option value="0">Easy</option>
  					 <option value="1">Medium</option>
  					 <option value="2">Hard</option>
					 </select></td>
	</tr>
<?php
}
?>

</table>
<br>
<center><input type="submit" name="submit"/></center>
</form>
</body>
</html>


	<!-- main content closing -->

<?php include'includes/footer.php'?>

	

