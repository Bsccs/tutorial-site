<!-- php -->
<?php include_once('../site files/classes/admin.php');
include "connect.php";
  $view_keywords=new admin($connection);
  $reg=$view_keywords->view_keywords();
?>
<!-- html part -->
<?php include 'includes/header.php'?>
                      <h1 class="m-0 text-light"> KEYWORD DETAILS</h1>
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
                                <th>KEYWORD</th>
                                <th>VALUE</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <?php $count=0; 
                                while($row_data=mysqli_fetch_assoc($reg)) 
                                { $count++; ?>
                              <tr>
                                  <td><?php echo $count; ?></td>
                                  
                                  <td><?php echo $row_data['keyword']; ?></td> 
                                  <td><?php echo $row_data['value']; ?></td> 
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

