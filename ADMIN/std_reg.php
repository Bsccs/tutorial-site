<!-- php -->
<?php include 'connection.php';
$reg=mysqli_query($connection,"SELECT * FROM `student_details` order by student_id");
?>
<!-- html part -->
<?php include 'includes/header.php'?>
                      <h1 class="m-0 text-light"> STUDENT-DETAILS</h1>
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
                                <!-- <th>EMAIL</th> -->
                                <th>NAME</th>
                                <th>GENDER</th>
                                <th>COUNTRY</th>
                                <th>STATE</th>
                                <th>PHONE NUMBER</th>
                                <th>AGE</th>
                                <th>LAST-LOGIN</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $count=0; 
                                while($row_data=mysqli_fetch_assoc($reg)) 
                                { $count++; ?>
                              <tr>
                                  <td><?php echo $count; ?></td>
                                  
                                  <td><?php echo $row_data['name']; ?></td>
                                  <td><?php echo $row_data['gender']; ?></td>
                                  <td><?php echo $row_data['country']; ?></td>  
                                  <td><?php echo $row_data['state']; ?></td>
                                  <td><?php echo $row_data['phone_number']; ?></td>
                                  <td><?php echo $row_data['age']; ?></td>
                                  <td><?php echo $row_data['last_login']; ?></td>              
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

