<?php
session_start();
  include_once('../site files/classes/admin.php');
include "connect.php";
  $add_expertise=new admin($connection);
  ?>
<!-- php -->
<?php 
$reg=mysqli_query($connection,"SELECT `student_details`.`name`,`stud_feedback`.`feedback` FROM `stud_feedback` JOIN `student_details` ON `stud_feedback`.`student_id`=`student_details`.`student_id` ");

?>
<!-- html part -->
<?php include 'includes/header.php'?>
                      <h1 class="m-0 text-light">STUDENT-FEEDBACK</h1>
                    </div>
                </div>
              </div>
          </div>
        
   <!-- Main content opening -->
            <div class="card">
                <form method="post" enctype="multipart/form-data" >
                  <div class="card-body">
                      <div class="table-responsive-sm">                     
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>SL.No</th>
                                <th>NAME</th>
                                <th>FEEDBACK</th>

                              </tr>
                            </thead>
                            <tbody>
                              <?php $count=0; 
                                while($row_data=mysqli_fetch_assoc($reg)) 
                                { $count++; ?>
                              <tr>
                                  <td><?php echo $count; ?></td>
                                  <td><?php echo $row_data['name']; ?></td>   
                                  <td><?php echo $row_data['feedback']; ?></td>               
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                    </div>
                  </div>
                </form>
            </div>          
         <!-- main content closing -->

    <?php include'includes/footer.php' ?>
