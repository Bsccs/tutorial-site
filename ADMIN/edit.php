<?php
include'connection.php';
$developer_id=$_GET['p_id'];
$p_query=mysqli_query($connection,"SELECT * FROM `product_table` WHERE product_id='$product_id'");
$p_data=mysqli_fetch_assoc($p_query);
if (isset($_POST['submit'])) {
  $product_name=$_POST['product'];
  mysqli_query($connection,"UPDATE `product_table` SET product_name='$product'WHERE product_id='$product_id'");

  echo "<script>alert('product edit succesfully');</script>";
echo"<script>window.history.back();</script>";
}
?>
