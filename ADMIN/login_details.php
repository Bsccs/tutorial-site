<!-- php -->
<?php include 'connection.php';
$reg=mysqli_query($connection,"select * from login order by login_id");

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
            				  <h1 class="m-0 text-dark">LOGIN-TABLE</h1>
      						</div>
        				</div>
      				</div>
    			</div>
  			</div>
    	        <!-- Main content opening -->
    	   		<div class="card">
            		<div class="card-header">
              			
            			<a href="add_login.php"><button type="button" class="btn btn-danger">ADD</button></a>
            		</div>
            		<!-- /.card-header -->
            		<form method="post" enctype="multipart/form-data" >
            			<div class="card-body">
              				<div class="table-responsive-sm">              				
              			  		<table id="example1" class="table table-bordered table-striped">
                					<thead>
                						<tr>
                  							<th>SL.No</th>
                  							<th>USERNAME</th>
                  							<th>PASSWORD</th>
                  							<th>TYPE</th>
                  							<th>ACTION</th>
                 						</tr>
                					</thead>
                					<tbody>
                  						<?php $count=0; 
                  							while($row_data=mysqli_fetch_assoc($reg)) 
                  							{ $count++; ?>
                							<tr>
                  								<td><?php echo $count; ?></td>
                  								<td><?php echo $row_data['username']; ?></td>
                  								<td><?php echo $row_data['password']; ?></td>
                  								<td><?php echo $row_data['type']; ?></td>
                  								<div class="btn-group">
                  										<td><a href="delete.php?l_id= <?php echo $row_data['login_id'];?>"onclick="return confirm('do you want to delete');"><button type="button"
                  											 class="btn btn-secondary">DELETE</button></a>
                  										</td>
                    							</div>                  
                							</tr>
                    					<?php } ?>
                					</tbody>
                             	</table>
             				</div>
            			</div>
            		</form>
                </div>          
    	   <!-- main content closing -->
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