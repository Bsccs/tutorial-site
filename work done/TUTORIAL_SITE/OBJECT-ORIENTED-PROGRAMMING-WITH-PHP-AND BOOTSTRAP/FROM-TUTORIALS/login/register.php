<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">	

		<?php validate_user_registartion(); ?> 				
		</div>
	</div>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="login.php">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" class="active" id="">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" method="post" role="form" >
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="fullname" value="" required >
									</div>
								 	<div class="form-group">
										<input type="text" name="gender" id="gender" tabindex="2" class="form-control" placeholder="gender(male,female or other)" required>
									</div>
									<div class="form-group">
										<input type="text" name="country" id="country" tabindex="1" class="form-control" placeholder="country" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="state" id="state" tabindex="1" class="form-control" placeholder="state" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="phone" id="phone" tabindex="1" class="form-control" placeholder="phone number" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="age" id="age" tabindex="1" class="form-control" placeholder="age" value="" required >
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
												
											</div>
											<?php register_user(); ?>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


<?php include("includes/footer.php") ?>