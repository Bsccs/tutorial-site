<!-- php -->
<?php include 'connect.php';
$reg=mysqli_query($connection,"SELECT * FROM `login` ORDER BY 'login_id'");

?>
<!-- html part -->
<?php include 'includes/header.php'?>
            				  <h1 class="m-0 text-light">LOGIN-TABLE</h1>
      						</div>
        				</div>
      				</div>
    			</div>  			
    	        <!-- Main content opening -->
    	   		<div class="card">
            		<div class="card-header">
              			
            			<a href="add_login.php"><button type="button" class="btn btn-danger">ADD</button></a>
            		</div>
            		<!-- /.card-header -->
            		<form method="post" enctype="multipart/form-data" >
            			<div class="card-body">
              				<div class="table-responsive-sm">              				
              			  		<table id="example1" class="table table-bordered table-striped">
                					<thead>
                						<tr>
                  							<th>SL.No</th>
                  							<th>EMAIL</th>
                  							<th>PASSWORD</th>
                  							<th>TYPE</th>
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
                  								<td><?php echo $row_data['password']; ?></td>
                  								<td><?php echo $row_data['role']; ?></td>
                  								<div class="btn-group">
                  										<td><a href="delete.php?l_id= <?php echo $row_data['login_id'];?>"	onclick="return confirm('do you want to delete');"><button 			type="button"class="btn btn-secondary">DELETE</button></a>
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