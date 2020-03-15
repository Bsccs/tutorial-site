<?php
// include "session.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>uploading test</title>
<style>
div { 
  display: block;
}
</style>
</head>
<body>
<form action="callingtest.php" method="post">
	<div>
<?php 
for($i=1;$i<=$_POST['number'];$i++)
{ ?>
	Question Number<?php echo $i; ?>:<input type="text" name="<?php echo "q".$i; ?>"/>
	Option A:<input type="text" name="<?php echo "opa".$i; ?>"/>
	Option B:<input type="text" name="<?php echo "opb".$i; ?>"/>
	Option C:<input type="text" name="<?php echo "opc".$i; ?>"/>
	Option D:<input type="text" name="<?php echo "opd".$i; ?>"/>
	Correct Option:<input type="text" name="<?php echo "crct".$i; ?>"/>
	Difficulty level:<select id="cars" name="difficulty">
  					 <option value="0">Easy</option>
  					 <option value="1">Medium</option>
  					 <option value="2">Hard</option>
					 </select>
	<br><br>
<?php
}
?>
</div>
<br>
<center><input type="submit" name="submit"/></center>
</form>
</body>
</html>
	