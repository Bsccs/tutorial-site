<?php 
// session_start();
// include "session.php";
include'../STUDENT/includes/header.php'?>

	<!-- main content opening -->


<?php
		
    if (isset($_POST['submit']))
    {
      $_SESSION['temp123']=$_POST['contentid'];
      header("Location:../STUDENT/studentfeedback.php");
    }




  include "classes/content.php";
  include 'connect.php';
  $content2=new content($connection);
 
?>
<div class="container">
		<!DOCTYPE html>
		<html>
		<head>
			<title>view content</title>
			<style>
				.iframe-container
				{
				  position: relative;
				  width: 50%;
				  padding-bottom: 56.25%; 
				  height: 0;
				}
				.iframe-container iframe{
				  position: absolute;
				  top:0;
				  left: 0;
				  width: 90%;
				  height: 90%;
				
			</style>
		</head>
		<body>
          <!--   The videos available are:<br> -->
            <?php 

            
           /* echo '<pre>';
var_dump($_SESSION);
echo '</pre>';*/


          //  $_SESSION['role']='student'; // check1
          //  $_SESSION['id']='2';			// check 1
          //  $_SESSION['templevel']='2';   //check 3
             $sql=$content2->view_content();
            // echo $sql;

                $result=mysqli_query($connection,$sql);

                if($_SESSION['role']=='student')
                {
                	?> <h1>Videos you have</h1><br><br>
           	    <table border="1" > <?php
                while($row = mysqli_fetch_assoc($result)) 
                {
                $embed=$row['content_name'];
                //$conid=$row['content_id'];
                //echo $row['content_id'];
               ?><tr>
               	<td><?php echo $embed; ?></td>
               	<td> </td>
               	<td><form method="post" action="">
                    <input type="hidden" name="contentid" value="<?php echo $row['content_id']; ?>">
                    <input type="submit" name="submit" value="Feedback"></td>
                    </form><td>
                <!-- <td><a href="attendtest.php" target="_blank" >Attend test</a>
                    <?php $_SESSION['tempconid']=$row['content_id']?></td> -->
               	</tr>
               	<br><br>
               	<?php
            	}
            }
            ?>
            </table>
            
		</body>
		</html>



	<!-- main content closing -->

<?php include'../STUDENT/includes/footer.php'?>