<?php session_start();
include_once('../site files/classes/admin.php');
include "connect.php";
$developer_id=$_GET['d_id'];
$add_expertise=new admin($connection);
$d_query=mysqli_query($connection,"SELECT * FROM `content_developer` WHERE developer_id='$developer_id'");
$d_data=mysqli_fetch_assoc($d_query);
if (isset($_POST['button'])) {
  $expertise=$_POST['exp'];
  $ret=$add_expertise->add_expertise($expertise, $developer_id);
  echo "<script>alert('updation succesfully');</script>";
echo"<script>window.location='develop_details.php';</script>";
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
                <a href="develop_details.php"><button type="submit" class="btn btn-default float-right">CANCEL</button></a>              
              </div>
              <form class="form-horizontal-sm" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">EXPERTISE</label>
                    <div class="col-sm-10">
                      <input type="text" name="exp" class="form-control" id="exp" placeholder="update expertise" value="<?php echo $d_data['expertise']; ?>"><span id="sp1" style="color:red"></span>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" name="button" onclick="return valid();" value="   UPDATE   " class="btn btn-info float-right"></input>
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
      document.getElementById('sp1').innerHTML="enter details";
      return false;
    }

  }
</script>
