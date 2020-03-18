<?php include'../content-provider/includes/header.php'?>

	<!-- main content opening -->



<!DOCTYPE html>
<html>
<head>
        <title>content developer</title>
</head>
<body>
<center><h1>Content Developer</h1></center>
<h2>Welcome <?php echo $name; ?></h2>
<br>
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



	<!-- main content closing -->

<?php include'includes/footer.php'?>

