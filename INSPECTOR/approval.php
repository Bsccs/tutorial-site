<!-- php -->
<?php include_once('../site files/classes/inspector.php');
include "connect.php";
  $approve_content=new inspector($connection);
  $reg=$approve_content->approve_content();
?>


<?php include'includes/header.php'?>

	<!-- main content opening -->
	<div class="card">
                <form method="post" enctype="multipart/form-data" >
                  <div class="card-body">
                      <div class="table-responsive-sm">                     
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>SL.No</th>
                                <th>CONTENT NAME</th>
                                <th>APPROVAL</th>
                                <th>CONTENT DEPTH</th>
                                <th>PEOPLE VIEWED</th>
                                <th>CONTENT LENGTH</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $count=0; 
                                while($row_data=mysqli_fetch_assoc($reg)) 
                                { $count++; ?>
                              <tr>
                                  <td><?php echo $count; ?></td>
                                  
                                  <td><?php echo $row_data['content_name']; ?></td>
                                  <td><?php echo $row_data['inspector_approved']; ?></td>
                                  <td><?php echo $row_data['content_depth']; ?></td>
                                  <td><?php echo $row_data['people_viewed']; ?></td>
                                  <td><?php echo $row_data['content_length']; ?></td>
                                  <td align="center"><?php if($row_data['inspector_approved']==0) { ?><a class="btn btn-block btn-danger btn-sm" href="approve.php?pst_id=<?php echo $row_data['content_id']; ?>">APPROVE</a><?php } else { ?><a class="btn btn-block btn-success">APPROVED</button> <?php } ?></td> 
                                  
                                  <div class="btn-group">
                                      <td><a href="delete2.php?l_id=<?php echo $row_data['content_id'];?>"  onclick="return confirm('do you want to delete');"><button      type="button"class="btn btn-primary">DELETE</button></a>
                                      	
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

<?php include'includes/footer.php'?>