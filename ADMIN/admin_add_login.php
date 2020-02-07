<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ADMIN</title>

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  <link rel="stylesheet" href="dist/css/css.css">

  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
 <?php include 'admin_nav.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">INSERT DETAILS</h1>
      </div>
    </div>
  </div>
</div>
   <!-- Main content -->

<section class="content">
      <div class="container-fluid">
        <form method="post" enctype="multipart/form-data" >
        <div class="row"><label>USERNAME</label>
          <div class="col-lg-4">
            <div class="form-group">
            <input type="text" name="username"placeholder="enter username"class="form-control">
          </div></div></div>
          <div class="row"><label>PASSWORD</label>
          <div class="col-lg-4">
            <div class="form-group">
            <input type="password" name="password"placeholder="enter password"class="form-control">
          </div></div></div>
          <div class="row">
            <label>TYPE</label>
          <div class="col-lg-4">
            <div class="form-group">
              <select name="type">
                <option value="admin">admin</option>
               <option value="teacher">teacher</option>
               <option value="inspector">inspector</option>
               <option value="student">student</option>
              </select>
                           
          </div></div></div>
        <!-- Small boxes (Stat box) -->
       <div class="row">

        <input type="submit" name="button" value="add">
      </div><br>
      </form>
      <div class ="row">
        <a href="admin_login_details.php"><input type="submit"value="cancel"></a>
      </div>
      
          <!-- ./col -->
        </div>
       
         </section>
       

<?php

include 'connection.php';
$login_id=$_GET['l_id'];
$login_query=mysqli_query($connection,"SELECT * FROM `login` WHERE login_id='$login_id'");
$login_id=mysqli_fetch_assoc($login_query);
if (isset($_POST['button'])) {
  $User_name=$_POST['username'];
  mysqli_query($connection,"UPDATE `login` SET username='$User_name'WHERE login_id='$login_id'");

  echo "<script>alert('details added succeessfully');</script>";
echo"<script>window.history.back();</script>";
}

if(isset($_POST['button']))
{
  $Username=$_POST['username'];

  $Password=$_POST['password'];
  
  $type=$_POST['type'];

  mysqli_query($connection,"INSERT INTO `login`(`username`, `password`, `type`) VALUES ('$Username','$Password','$type')");

}
    
?>


<!-- REQUIRED SCRIPTS -->
 <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
