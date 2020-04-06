<!-- php -->
<?php session_start(); 
include_once('../site files/classes/admin.php');
include "connect.php";
  $view_inspctr_details=new admin($connection);
  $reg=$view_inspctr_details->view_inspctr_details();
?>
<!-- html part -->
<?php include 'includes/header.php'?>
                      <h1 class="m-0 text-light"> INSPECTOR DETAILS</h1>
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
                                <th>EMAIL</th>
                                <th>NAME</th>
                                <th>ACTION</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $count=0; 
                                while($row_data=mysqli_fetch_assoc($reg)) 
                                { $count++; ?>
                              <tr>
                                  <td><?php echo $count; ?></td>
                                  
                                  <td><?php echo $row_data['email']; ?></td>
                                  <td><?php echo $row_data['name2']; ?></td>
                                  <div class="btn-group">
                                      <td><a href="delete3.php?l_id= <?php echo $row_data['login_id'];?>"  onclick="return confirm('do you want to delete');"><button type="button"class="btn btn-secondary">DELETE</button></a>
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

    <?php include'includes/footer.php' ?>

