<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar bootstrap</title>
		<script src="jquery/dist/jquery.min.js" charset="utf-8"></script>
		<script src="bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
		<script src="script/script.js" charset="utf-8"></script>
		<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- belajar membuat modal box login form -->
					<div class="btn-group">
						<button class="btn btn-primary text-capitalize" data-target="#modal_login" data-toggle="modal" type="button" name="button">login</button>
					</div>
					
					<div id="modal_login" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header well">
									<button class="close" type="button" data-dismiss="modal">
										<span class="glyphicon glyphicon-off"></span>
									</button>
									<h4 class="modal-title text-center text-capitalize">login user</h4>
								</div>
								
								<div class="modal-body">
									<form class="form-horizontal" action="" method="get" style="padding:10px;">
										<div class="form-group">
											<div class="row">
												<div class="col-md-2 col-sm-12">
													<label for="username_login">Username:</label>
												</div>
												<div class="col-md-10 col-sm-12">
													<div class="input-group">
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-user"></span>
														</span>
														<input id="username_login" class="form-control" type="text" name="username" placeholder="Username...">
													</div>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-2 col-sm-12">
													<label for="password_login">Password: </label>
												</div>
												<div class="col-md-10 col-sm-12">
													<div class="input-group">
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-lock"></span>
														</span>
														<input id="password_login" class="form-control" type="password" name="password" placeholder="Password...">
													</div>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-10 col-md-offset-2 col-sm-12">
													<div class="checkbox">
														<label>
															<input type="checkbox" name="remember_login" value="true">
															Remember me
														</label>
													</div>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-10 col-md-offset-2 col-sm-12">
													<div class="row">
														<div class="col-md-6 col-sm-12">
															<button class="btn btn-primary btn-block" type="submit" name="button">
																Login
																<span class="glyphicon glyphicon-log-in"></span>
															</button>
														</div>
														
														<div class="col-md-6 col-sm-12">
															<button class="btn btn-danger btn-block" type="reset" name="button">
																Reset
																<span class="glyphicon glyphicon-repeat"></span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								
								<div class="modal-footer well">
									<h4 class="modal-title text-capitalize">
										<ul class="breadcrumb">
											<li>
												<a href="#">Register</a>
											</li>
											<li>
												<a href="#">forgot password?</a>
											</li>
										</ul>
									</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>