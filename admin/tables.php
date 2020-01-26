<!-- php -->
<?php include 'includes/connection.php';
$reg=mysqli_query($connection,"select * from student_registration order by login_id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ADMIN</title>

<?php include 'includes/css_plugin.php' ?>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
 <?php include 'nav.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> DETAILS</h1>
      </div>
    </div>
  </div>
</div>
   <!-- Main content -->
 <div class="card">
            <div class="card-header">
              <h3 class="card-title"><U>STUDENT-REGISTRATION</U></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL.No</th>
                  <th>FULL-NAME</th>
                  <th>EMAIL</th>
                  <th>PHONE NUMBER</th>
                  <th>PASSWORD</th>
                  <th>ACTION</th>
                 </tr>
                </thead>
                <tbody>
                  <?php $count=0; 
                  while($row_data=mysqli_fetch_assoc($reg)) 
                  { $count++; ?>
                <tr>
                  <td><?php echo $count; ?></td>
                  <td><?php echo $row_data['name']; ?></td>
                  <td><?php echo $row_data['Email']; ?></td>
                  <td><?php echo $row_data['Phone']; ?></td>
                  <td><?php echo $row_data['Password']; ?></td>
                  <td><a href="">edit</a>/<a href="">delete</a></td>
                </tr>
                    <?php } ?>
                </tbody>
                
               </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.col -->
    </div>



</div>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<?php include 'includes/js_plugin.php' ?>
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
