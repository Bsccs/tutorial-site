<?php
session_start();
 include'includes/header.php'?>

<body>
	<div class="body-wrap">
   		<?php include'NAVBAR2.php'?>  
  	 		<div class="container">

				<!-- main content -->

					<?php include'STUDENT/FLIPBOX2.php'?>

				<!-- main content closing -->
			</div>
	</div>
	<script type="text/javascript">

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<?php include'includes/footer.php'?>


