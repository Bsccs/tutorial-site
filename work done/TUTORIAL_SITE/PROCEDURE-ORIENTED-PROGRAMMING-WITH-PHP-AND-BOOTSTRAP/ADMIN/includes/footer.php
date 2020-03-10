         <!-- content wrapper closing -->
        </div>
    		<!-- wrapping closing -->
		</div>	

		<!--script opening-->
		<!-- jquery -->
	 	<script src="../plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="../dist/js/adminlte.min.js"></script>
		<!-- DataTables -->
		<script src="../plugins/datatables/jquery.dataTables.js"></script>
		<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
		<!-- script closing -->
	</body>
	<!-- body part closing ---->
</html>
<!-- html closing -->
<!-- table script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
		<!-- table script -->


<style>
.bg-primary {
    background-color: black;
}

.content-wrapper{
	background-image: url('../img/hacker.jpg');
	
	position: absolute;
	height: 200%;
	width:100%;
	background-size:cover;
	background-position: 100%;
	margin:0 auto;

}

	.card{
		opacity: 0.7;
		
		
	}

  



</style>