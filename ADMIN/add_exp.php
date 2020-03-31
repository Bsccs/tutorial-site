<!-- php -->
<?php
	include_once('../site files/classes/admin.php');
include "connect.php";
  $add_expertise=new admin($connection);
	if(isset($_POST['button']))
		{
  			$Username=$_POST['expertise'];
        $ret=$add_expertise->add_expertise();
  			echo "<script>alert('details added successfully');</script>";
			echo"<script>window.history.back();</script>";
		}
?>
<!-- html part -->
<?php include 'includes/header.php'?>

<h1 class="m-0 text-light">INSERT DETAILS</h1>
</div></div></div></div>  				    			
  		 
    	   <!-- Main content opening -->
    	   	<section class="content">
      			<div class="container">
            <div class="card card-info">
              <div class="card-header">
                <a href="develop_details.php"><button type="cancel" class="btn btn-default float-right">CANCEL</button></a>              
              </div>
              <form class="form-horizontal-sm" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="exp" class="col-sm-2 col-form-label">EXPERTISE</label>
                    <div class="col-sm-10">
                      <input type="text" name="exp" class="form-control" id="exp" placeholder="add expertise"><span id="sp1" style="color:red"></span>
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
    var exp=document.getElementById('exp').value;

    if(exp=="")
    {
      document.getElementById('sp1').innerHTML="required";
      return false;
    }
  }
</script>

<style>
          .card-info{
            margin-top: 100px;

        }
</style>