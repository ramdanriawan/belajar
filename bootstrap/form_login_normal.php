<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>form login normal</title>
		<script src="jquery/dist/jquery.min.js" charset="utf-8"></script>
		<script src="bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
		<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
	</head>
	<body>
		<!-- login form normal -->
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<form class="form-horizontal" action="" method="get" style="padding:10px;">
						<div class="form-group well">
							<h4  class="form-control-static text-capitalize text-center">
								login user
							</h4>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 col-xs-12">
									<label for="login_username">Username:</label>
								</div>
								<div class="col-md-10 col-xs-12">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
										<input id="login_username" class="form-control"	type="text" name="username" placeholder="Username...">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 col-xs-12">
									<label for="login_password">Password:</label>
								</div>
								<div class="col-md-10 col-xs-12">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-lock"></span>
										</div>
										<input id="login_password" class="form-control"	type="password" name="password" placeholder="Password...">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-10 col-md-offset-2 col-xs-12">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember_me">
											Remember me
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-10 col-md-offset-2 col-xs-12">
									<div class="row">
										<div class="col-md-6 col-xs-12">
											<button class="btn btn-primary btn-block" type="submit">
												Login
												<span class="glyphicon glyphicon-log-in"></span>
											</button>
										</div>
										<div class="col-md-6 col-xs-12">
											<button class="btn btn-danger btn-block" type="reset">
												Reset
												<span class="glyphicon glyphicon-repeat"></span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group well">
							<h4 class="form-control-static pull-right">
								<ul  class="breadcrumb">
									<li>
										<a href="#">Register</a>
									</li>
									<li>
										<a href="#">Lupa password?</a>
									</li>
								</ul>
							</h4>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</body>
</html>