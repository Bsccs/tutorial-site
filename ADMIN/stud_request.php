<!-- php -->
<?php include 'connection.php';
$reg=mysqli_query($connection,"SELECT * FROM `request` order by 'student_id'");
?>
<!-- html part -->
<?php include 'includes/header.php'?>
            				  <h1 class="m-0 text-dark">REQUESTS</h1>
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
                  							<th>REQUEST</th>
                                <th>DATE</th>
                 						</tr>
                					</thead>
                					<tbody>
                  						<?php $count=0; 
                  							while($row_data=mysqli_fetch_assoc($reg)) 
                  							{ $count++; ?>
                							<tr>
                  								<td><?php echo $count; ?></td>
                  								<td><?php echo $row_data['requests']; ?></td>
                                  <td><?php echo $row_data['date']; ?></td>                
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
