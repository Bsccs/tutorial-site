<?php include("includes/header.php") ?>
<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
					<div class="alert-placeholder">
	
					</div>
					<div class="panel panel-success">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="text-center"><h2><b>HACKERZDOM</b></h2></div>
									<form id="register-form"  method="post" role="form" autocomplete="off">
										<div class="form-group">
											<label for="email">ENTER OTP</label>
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="enter OTP" value="" autocomplete="off" />
										</div>
										<div class="form-group">
											<div class="row">

												<div class="col-lg-6 col-sm-6 col-xs-6">
													<input type="submit" name="cancel-submit" id="cencel-submit" tabindex="2" class="form-control btn btn-danger" value="Cancel" />
												</div>
												<div class="col-lg-6 col-sm-6 col-xs-6">
													<a href="login.php"><input type="cancel" name="varifyt" id="recover-submit" tabindex="2" class="form-control btn btn-success" value="VERIFY" /></a>
												</div>

												
											</div>
										</div>
										<input type="hidden" class="hide" name="token" id="token" value="">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
<?php include("includes/footer.php") ?>