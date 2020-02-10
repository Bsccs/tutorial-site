<!-- php -->
<?php
	include 'connection.php';
	if(isset($_POST['button']))
		{
  			$Username=$_POST['username'];
  			$Password=$_POST['password'];
  			$type=$_POST['role'];
			mysqli_query($connection,"INSERT INTO `login`(`email`, `password`, `role`) VALUES ('$Username','$Password','$type')");
  			echo "<script>alert('details added succeessfully');</script>";
			echo"<script>window.history.back();</script>";
		}
    
?>
<!-- html opening -->
<!DOCTYPE html>
<html lang="en">
	<!-- head part opening------>
	<head>
		<!-- encoding methods --> 
  		<meta charset="utf-8">
  		<!-- Responsive Meta Tag -->
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<meta http-equiv="x-ua-compatible" content="ie=edge">
  		<!-- title -->
  		<title>ADMIN</title>
  		<!-- - plugins opening----->
  		<!-- font awesome -->
  		<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  		<!-- admin LTE plugins -->
  		<link rel="stylesheet" href="dist/css/adminlte.min.css">
  		<!--  bootstrap plugins -->
  		<link rel="stylesheet" href="dist/css/css.css">
  		<!-- table plugins -->
  		<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  		<!---plugins closing----->
	</head>
	<!-- head part closing------>
	<!-- body part opening ------>
	<body class="hold-transition layout-top-nav">
		<!-- wrapping opening -->
		<div class="wrapper">
  		   <!-- Navbar -->
 	       <?php include 'nav.php' ?>
  			<!-- Content Wrapper- Contains page content -->
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
  		 
    	   <!-- Main content opening -->
    	   	<section class="content">
      			<div class="container-fluid">
        		  	<form method="post" enctype="multipart/form-data" >
        				<div class="row"><label>EMAIL</label>
          					<div class="col-lg-4">
            					<div class="form-group">
            						<input type="text" name="username"placeholder="enter email"class="form-control">
          						</div>
          					</div>
          				</div>
          				<div class="row"><label>PASSWORD</label>
          					<div class="col-lg-4">
            					<div class="form-group">
            						<input type="password" name="password"placeholder="enter password"class="form-control">
          						</div>
          					</div>
          				</div>
          				<div class="row"><label>TYPE</label>
          					<div class="col-lg-4">
            					<div class="form-group">
              						<select name="type">
                						<option value="admin">admin</option>
               							<option value="teacher">teacher</option>
              							<option value="inspector">inspector</option>
             						  </select>                           
          						</div>
          					</div>
          				</div>
       					<div class="row">
        					<input type="submit" name="button" value="add">
      					</div><br>
      				</form>
      					<div class ="row">
        				 <a href="login_details.php"><input type="submit"value="cancel"></a>
      					</div>
      			</div>
      		</section>
    	   <!-- main content closing -->
         <!-- content wrapper closing -->
        </div>
    		<!-- wrapping closing -->
		</div>  
		<!--script opening-->
		<!-- jquery -->
	 	<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/adminlte.min.js"></script>
		<!-- DataTables -->
		<script src="plugins/datatables/jquery.dataTables.js"></script>
		<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
		<!-- script closing -->
		<!-- table script -->
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
		<!-- table script -->
	</body>
	<!-- body part closing ---->
</html>
<!-- html closing -->
