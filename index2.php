<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['user_id']))
{
  header('location:login.php');
}
?>

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
 	<?php include 'top-navigation2.php'?>

  <?php include 'flip-level.php'?>
  </body>
</html>

