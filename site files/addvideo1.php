<?php include'../content-provider/includes/header.php'?>

	<!-- main content opening -->

<?php
include 'connect.php';
if (isset($_POST['submit'])) 
{ 
	include "connect.php";
	include "classes/content.php";
	$tags=array($_POST['tag1'],$_POST['tag2'],$_POST['tag3'],$_POST['tag4']);
	// print_r($tags);
	//echo "check";
	//echo $_POST['depth'];
	//echo "check";
	$content1=new content($connection);
	$content1->add_video($_POST['embedvideo'],$_POST['depth'],$tags,$_POST['topics']);
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>tutorial site</title>
</head>
<body>
	<h1>Upload your video (upload to youtube, set privacy to unlisted then copy the embed video link of your video)</h1>
	<h2>You can also upload test for this video after submitting the video</h2>
<form action="" method="post">
Upload video:<input type="text" name="embedvideo" />
<br>
Enter min 2 tags to specify the area of your video:
tag1 <input type="text" name="tag1"/>
tag2 <input type="text" name="tag2"/>
tag3 <input type="text" name="tag3"/>
tag4 <input type="text" name="tag4"/>
<br>
Content Depth 
<select name="depth">
  <option value="2">Advanced</option>
  <option value="1">Medium</option>
  <option value="0">Easy</option>
</select>
<br>
Enter the topic on which you are submitting video: 
<select name="topics">

	  <?php
	
	$sql="SELECT * FROM topics ";
	$result=mysqli_query($connection,$sql);

	while($row = mysqli_fetch_assoc($result)) 
	 {
	 	$temp=$row[topic_name];
	 	// echo $temp;

		?>

		<option value="<?php echo $temp; ?>"> <?php echo $temp; ?> </option>
	<?php
	 };
	 mysqli_close();
   ?>
    
</select>
<br>
<input type="submit" name="submit" value="add video"/>
</form>
</body>
</html>


	<!-- main content closing -->

<?php include'includes/footer.php'?>