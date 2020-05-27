<!-- php -->
<?php session_start();
include_once('../site files/classes/admin.php');
include "connect.php";
  $condev_details=new admin($connection);
  $reg=$condev_details->condev_details();
?>
<!-- html part -->
<?php include 'includes/header.php'?>

<style type="text/css">


</style>
                      <h1 class="m-0 text-light"> CONTENT DEVELOPER DETAILS</h1>
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
                                <th>QUALIFICATION-DOCS</th>
                                <th>EXPERTISE</th>
                                <th>ADMIN APPROVAL</th>
                                <th>ACTION</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $count=0; 
                                while($row_data=mysqli_fetch_assoc($reg)) 
                                { $count++; ?>
                              <tr>
                                  <td><?php echo $count; ?></td>
                                  
                                  <td><?php echo $row_data['name1']; ?></td>
                                  <td><a href='<?php echo "../doc/".$row_data['quali_doc']; ?>' target="_blank">open qualification document</a></td>
                                  <td><?php echo $row_data['expertise']; ?></td>

                                  <td align="center"><?php if($row_data['admin_aproved']==0) { ?><a class="btn btn-block btn-danger btn-sm" href="admin_approve.php?pst_id=<?php echo $row_data['developer_id']; ?>">APPROVE</a><?php } else { ?><a class="btn btn-block btn-success">APPROVED</button> <?php } ?></td> 
                                  
                                  <div class="btn-group">
                                      <td><a href="delete2.php?l_id=<?php echo $row_data['developer_id'];?>"  onclick="return confirm('do you want to delete');"><button      type="button"class="btn btn-primary">DELETE</button></a>
                                      	<a href="edit.php?d_id=<?php echo $row_data['developer_id'];?>"><button      type="button"class="btn btn-secondary">UPDATE</button></a>
                                      </td>

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

