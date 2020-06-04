<!-- php -->
<?php session_start();
	
include "connect.php";
  
	if(isset($_POST['button']))
		{
  			$topic=$_POST['contopic'];


        $ret=mysqli_query($connection,"INSERT INTO `topics` VALUES ('$topic')");
  			echo "<script>alert('details added successfully');</script>";
			echo"<script>window.history.back();</script>";
		}
?>
<style>
          .card-info{
            margin-top: 50px;

        }
</style>
<!-- html part -->
<?php include 'includes/header.php'?>

<h1 class="m-0 text-light">INSERT DETAILS</h1>
</div></div></div></div>  				    			
  		 
    	   <!-- Main content opening -->
    	   	<section class="content">
      			<div class="container">
            <div class="card card-info">
              <div class="card-header">
                <a href="login_details.php"><button type="submit" class="btn btn-default float-right">CANCEL</button></a>              
              </div>
              <form class="form-horizontal-sm" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="contopic" class="col-sm-2 col-form-label">TOPIC NAME</label>
                    <div class="col-sm-10">
                      <input type="text" name="contopic" class="form-control" id="contopic" placeholder="ENTER TOPIC"><span id="sp1" style="color:red"></span>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" name="button" onclick="return valid();" value="   ADD   " class="btn btn-info float-right"></input>
                  </form>   
              </div>
            </div>
      			</div>
        </div>
      </section>


    	   <!-- main content closing -->

    <?php include'includes/footer.php' ?>

<script>
    function valid()
  {
   var varcontopic=document.getElementById('contopic').value;


    if(contopic=="")
    {
      document.getElementById('sp1').innerHTML="text required";
      return false;
    }
    
  }
</script>

