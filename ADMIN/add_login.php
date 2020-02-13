<!-- php -->
<?php
	include 'connection.php';
	if(isset($_POST['button']))
		{
  			$Username=$_POST['username'];
  			$Password=$_POST['password'];
  			$type=$_POST['type'];
		mysqli_query($connection,"INSERT INTO `login`(`email`, `password`, `role`) VALUES ('$Username','$Password','$type')");
  			echo "<script>alert('details added succeessfully');</script>";
			echo"<script>window.history.back();</script>";
		}
    
?>
<!-- html part -->
<?php include 'includes/header.php'?>

<h1 class="m-0 text-dark">INSERT DETAILS</h1>
</div></div></div></div>  				    			
  		 
    	   <!-- Main content opening -->
    	   	<section class="content">
      			<div class="container-fluid">
        		  	<form method="post" enctype="multipart/form-data" >
        				<div class="row"><label>EMAIL</label>
          					<div class="col-lg-4">
            					<div class="form-group">
            						<input type="text" name="username"placeholder="enter email"class="form-control">
          						</div>
          					</div>
          				</div>
          				<div class="row"><label>PASSWORD</label>
          					<div class="col-lg-4">
            					<div class="form-group">
            						<input type="password" name="password"placeholder="enter password"class="form-control">
          						</div>
          					</div>
          				</div>
          				<div class="row"><label>TYPE</label>
          					<div class="col-lg-4">
            					<div class="form-group">
              						<select name="type">
                						<option value="admin">admin</option>
               							<option value="teacher">teacher</option>
              							<option value="inspector">inspector</option>
             						  </select>                           
          						</div>
          					</div>
          				</div>
       					<div class="row">
        					<input type="submit" name="button" value="add">
      					</div><br>
      				</form>
      					<div class ="row">
        				 <a href="login_details.php"><input type="submit"value="cancel"></a>
      					</div>
      			</div>
      		</section>
    	   <!-- main content closing -->

    <?php include'includes/footer.php' ?>
