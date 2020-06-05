<?php
session_start();
  include_once('../site files/classes/admin.php');
include "connect.php";
  $add_expertise=new admin($connection);
  $num_of_content=mysqli_query($connection,"SELECT COUNT(content_name) FROM content");
  $num_of_student=mysqli_query($connection,"SELECT COUNT(email) FROM login WHERE role='student'");
  $num_of_teachers=mysqli_query($connection,"SELECT COUNT(name1) FROM content_developer WHERE admin_aproved='1' ");
  $num_of_inspector=mysqli_query($connection,"SELECT COUNT(email) FROM login WHERE role='inspector'");
  
 $r1=mysqli_fetch_assoc($num_of_content);
  $r2=mysqli_fetch_assoc($num_of_student); 
  $r3=mysqli_fetch_assoc($num_of_teachers);
  $r4=mysqli_fetch_assoc($num_of_inspector);
  $r1=implode($r1);
  $r2=implode($r2);
  $r3=implode($r3);
  $r4=implode($r4);
  ?>
<style>
          .layout{
            margin-top: 80px;


        }
        .inner
        {
          
          height: 140px;
          
          border: 2px solid black;
        }
                
h1 {
  color: white;
  text-align:center;
  margin: 0 0 5% 0;
  padding: 0.7em;
  margin: 0 0 5% 0;
  padding-left: 500px;
}
  

</style>

<?php include 'includes/header.php'?>
                      <h1 class="m-0 text-light" > <u>ADMIN</u></h1>
                    </div>
                </div>
              </div>
          </div>
    	    <!-- Main content opening -->
          <section class="content">
            <div class="container">
              <div class="layout">
              <!-- Small boxes-->
              <div class="row">
                <!-- small box starting -->
                <div class="col-sm-3 col-6">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3><?php echo $r1;?></h3>
                      <p>NUMBER OF CONTENTS</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-book-reader"></i>
                    </div>
<!--               <a href="login_details.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a>  -->
                  </div>
                </div>
                 <!-- ./col -->
                <div class="col-sm-3 col-6">
                 <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                     <h3><?php echo $r2;?></h3>
                     <p>NUMBER OF STUDENTS</p>
                    </div>
                    <div class="icon">
                     <i class="fas fa-user-graduate"></i>
                    </div>
  <!--                   <a href="std_reg.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-sm-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3><?php echo $r3;?></h3>
                      <p>NUMBER OF TEACHERS</p>
                    </div>
                    <div class="icon">
                     <i class="fas fa-chalkboard-teacher"></i>
                    </div>
       <!--              <a href="develop_details.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                  </div>
                </div>
                      <div class="col-sm-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3><?php echo $r4;?></h3>
                      <p>NUMBER OF INSPECTOR</p>
                    </div>
                    <div class="icon">
                     <i class="far fa-file-alt"></i>
                    </div>
<!--                     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                  </div>
                </div>
                <!-- ./col -->
              </div>
            </div>
          </div>
          </section>
         <!-- main content closing -->

    <?php include'includes/footer.php' ?>

