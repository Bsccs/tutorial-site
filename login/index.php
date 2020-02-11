<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>


	
	<div class="jumbotron">
		<h1 class="text-center"> Home Page</h1>
	</div>


<?php
$sql="SELECT * FROM login";
$result=query($sql);
confirm($result);

$row=fetch_array($result);

echo $row['email'];


?>

<?php include("includes/footer.php") ?>