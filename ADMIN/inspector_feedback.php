<?php
session_start();
  include_once('../site files/classes/admin.php');
include "connect.php";
  $add_expertise=new admin($connection);
  ?>
<!-- php -->
<?php 
$reg=mysqli_query($connection,"SELECT `insp_feedback`.`feedback`,`content`.`content_id`,`content`.`content_name` FROM `insp_feedback` JOIN `content`ON `content`.`content_id`= `insp_feedback`.`content_id`");

?>
<!-- html part -->
<?php include 'includes/header.php'?>
                      <h1 class="m-0 text-light">INSPECTOR-FEEDBACK</h1>
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
                                <th>CONTENT NAME</th>
                                <th>FEEDBACK</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $count=0; 
                                while($row_data=mysqli_fetch_assoc($reg)) 
                                { $count++; ?>
                              <tr>
                                  <td><?php echo $count; ?></td>
                                  <td><?php echo $row_data['content_name']; ?></td>
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
