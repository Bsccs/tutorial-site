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
      <style>
          .layout{
            margin-top: 100px;
        }
      </style>
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
                      <h1 class="m-0 text-dark"> ADMIN</h1>
                    </div>
                </div>
              </div>
          </div>
    	    <!-- Main content opening -->
          <section class="content">
            <div class="container-fluid">
              <div class="layout">
              <!-- Small boxes-->
              <div class="row">
                <!-- small box starting -->
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>150</h3>
                      <p>New Orders</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                  <!-- small box closing -->
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
                      <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                 <!-- ./col -->
                <div class="col-lg-3 col-6">
                 <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                     <h3>44</h3>
                     <p>User Registrations</p>
                    </div>
                    <div class="icon">
                     <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>65</h3>
                      <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                     <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
            </div>
          </div>
          </section>
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
	</body>
	<!-- body part closing ---->
</html>
<!-- html closing