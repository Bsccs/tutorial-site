<!-- php -->
<?php include'includes/header.php'?>
<?php 

include_once('../site files/classes/inspector.php');
include "connect.php";
  $approve_content=new inspector($connection);
  $reg1=mysqli_query($connection,"SELECT * FROM `content`");
?>




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
                                while($data=mysqli_fetch_assoc($reg1)) 
                                { $count++; ?>
                              <tr>
                                  <td><?php echo $count; ?></td>
                                  
                                  <td><?php echo $data['content_name']; ?></td>
                                  
                                    <td align="center"><div class="btn-group btn-group-sm"><?php if($data['inspector_approved']==0) { ?><a class="btn btn-success" 
                                    href="approve.php?pst_id=<?php echo $data['content_id']; ?>">APPROVE</a><?php } else { ?><a class="btn btn-success">APPROVED <i class="fas fa-check"></i></a></button> <?php } ?><?php if($data['inspector_approved']==1) { ?><a class="btn btn-danger btn-sm" 
                                    href="approve2.php?pst_id=<?php echo $data['content_id']; ?>">DISAPPROVE</a><?php } else { ?><a class="btn btn-danger">DISAPPROVED <i class="fas fa-times"></i></a></button> <?php } ?></div></td>
                                    
                                  <td><?php echo $data['content_depth']; ?></td>
                                  <td><?php echo $data['people_viewed']; ?></td>
                                  <td><?php echo $data['content_length']; ?></td>                      
                                  
<!--                                   <div class="btn-group">
                                      <td><a href="delete.php?l_id=<?php // echo $data['content_id'];?>"  onclick="return confirm('do you want to delete');"><button      type="button"class="btn btn-primary">DELETE</button></a>
                                      	
                                      </td> -->

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