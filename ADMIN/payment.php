<!-- php -->
<?php session_start();
include_once('../site files/classes/admin.php');
include "connect.php";

$payment=new admin($connection);
$reg=$payment->payment_details();
?>
<!-- html opening -->
<?php include 'includes/header.php'?>

            				  <h1 class="m-0 text-light">PAYMENT DETAILS</h1>
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
                  							<th>TRANSACTION NUMBER</th>
                  							<th>EMAIL</th>
                  							<th>TRANSATIONS DATE</th>
                  							<th>AMOUNT</th>                  							
                 						</tr>
                					</thead>
                					<tbody>
                  						<?php $count=0; 
                  							while($row_data=mysqli_fetch_assoc($reg)) 
                  							{ $count++; ?>
                							<tr>
                  								<td><?php echo $count; ?></td>
                  								<td><?php echo $row_data['trans_num']; ?></td>
                  								<td><?php echo $row_data['email']; ?></td>
                  								<td><?php echo $row_data['trans_date']; ?></td>
                  								<td><?php echo $row_data['trans_amount']; ?></td>   
                  								
                							</tr>
                    					<?php } ?>
                					</tbody>
                             	</table>
             				  </div>
            			</div>
            		</form>
            </div>          
    	   <!-- main content closing -->
         
<!--  html closing -->
<?php include'includes/footer.php' ?>