<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar Bootstrap</title>
		<script src="jquery/dist/jquery.min.js" charset="utf-8"></script>
		<script src="jquery-ui/jquery-ui.min.js" charset="utf-8"></script>
		<script src="bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
		<script src="script/script.js" charset="utf-8"></script>
		<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				
				<div id="navigasi-kiri" class="col-xs-3">
					<nav id="mainNavbar">
						<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="200">
							<li><a href="#">menu 1</a></li>
							<li><a href="#">menu 2</a></li>
							<li><a href="#">menu 3</a></li>
					</nav>
					</ul>
				</div>
				
				<p  class="lead">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cupiditate corrupti molestiae voluptas culpa laboriosam repellat, vero quod temporibus, at est reprehenderit maxime, corporis neque mollitia tempore ab eveniet aut!
				</p>
				<span  class="h2"><abbr title="judul"> text judul abbr </abbr></span>
				<blockquote cite="http://oke.com">
					<p>text</p>
					<footer>footer <cite title="ini title"></cite></footer>
				</blockquote>
				
				<ul  class="list-unstyled">
					<li>a</li>
					<li>a</li>
					<li>a</li>
					<li>a</li>
				</ul>
				
				<ul  class="list-group list-inline">
					<li  class="list-group-item">list group style <span  class="badge">1</span></li>
					<li  class="list-group-item">list group style  <span  class="badge">2</span></li>
					<li  class="list-group-item">list group style  <span  class="badge">3</span></li>
				</ul>
				
				<div  class="list-group">
					
					<a  class="list-group-item list-group-item-danger" href="http://google.com">
						<h1  class="list-group-item-heading">t</h1>
					</a>
					<a  class="list-group-item" href="http://google.com">text</a>
					<a  class="list-group-item" href="http://google.com">text</a>
				</div>
			</div>
			
			<div  class="table-responsive">
				<table  class="table table-bordered table-condensed table-striped table-hover table">
					<tr  class="active"><td>oke</td></tr>
					<tr  class="danger"><td>oke</td></tr>
					<tr><td>oke</td></tr>
					<tr><td>oke</td></tr>
				</table>
			</div>
			
			<button  class="btn btn-primary">sdfs</button>
			<button  class="btn btn-danger">sdfsf</button>
			<button  class="btn btn-success">sdfsf</button>
			<button  class="btn btn-warning">sdfsf</button>
			<div  class="col-md-4">
				<div  class="sdfs">
					<button  class="btn btn-primary btn-block disabled">sdfsf</button>
				</div>
			</div>
			
			<button class="btn btn-primary btn-xs"type="button" name="button">
				cari 
				<span  class="glyphicon glyphicon-search"></span>
				
			</button>
			
			<div  class="dropdown dropup">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					Dropdown Menu 
					<spna class="caret"></spna>
				</a>
				<ul class="dropdown-menu">
					<li class="dropdown-header"><a href="#">data</a></li>
					<li  class="divider"></li>
					<li><a href="#">data</a></li>
					<li><a href="#">data</a></li>
				</ul>
			</div>
			
			<div  class="btn-group btn-group-lg">
				<a  class="btn btn-primary">button</a>
				<a  class="btn btn-success">button</a>
				
				<div  class="btn-group">
					<div class="btn-group dropdown">
						<button  class="btn btn-warning">
								Lihat Menu
							</button>
							<button class="btn btn-warning dropdown-toggle" href=""  data-toggle="dropdown">
								<span class="caret"></span>
							</button>
						<ul  class="dropdown-menu list-group">
							<li  class="list-group-item list-group-item-heading"><a href="">a</a></li>
							<li  class="list-group-item"><a href="">a</a></li>
							<li  class="list-group-item"><a href="">a</a></li>
							<li  class="list-group-item"><a href="">a</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="col-md-10">
				<div  class="well well-sm">
					<form class="form-horizontal" action="">
						<div  class="form-group">
							<h2  class="form-control-static col-sm-10 col-sm-offset-2 text-center text-capitalize text-primary">
								Login User 
								<span class="glyphicon glyphicon-user"></span>
							</h2>
						</div>
						<div class="form-group has-success has-feedback">
							<label for="login_username" class="control-label col-sm-2">Username: </label>
							<div class="col-sm-10">
								<div class="input-group">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-user"></span>
									</span>
									<input id="login_username" class="form-control" placeholder="Login Username"type="text" value="username" disabled>
								</div>
								<span class="glyphicon glyphicon-ok form-control-feedback"></span>
								<span class="help-block">Required</span>
							</div>
						</div>
						<label for="login_password" class="control-label col-sm-2">Password: </label>
						<div class="row col-sm-10">
							<div class="col-sm-3">
								<div class="form-group has-error has-feedback">
									<div class="col-sm-10">
										<div class="input-group">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-lock"></span>
											</span>
											<input  id="login_password" class="form-control" placeholder="Login Password"type="password">
										</div>
										<span class="glypicon glyphicon-warning-sign form-control-feedback"></span>
										<span class="help-block">Password Salah!</span>
									</div>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<div class="input-group">
									<span class="input-group-btn">
										<button type="button" class="btn btn-warning">Cari datanya</button>
									</span>
									<input type="search" class="form-control">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<div class="btn-group col-sm-6">
									<button type="submit" class="btn btn-primary btn-block" value="Login">
										Login 
										<span class="glyphicon glyphicon-log-in"></span>
									</button>
								</div>
								<div class="btn-group col-sm-6">
									<button type="reset" class="btn btn-danger btn-block" value="Reset">
										Reset
										<span class="glyphicon glyphicon-repeat"></span>
									</button>
								</div>
							</div>
						</div>
						
						<div class="form-group checkbox disabled">
							<label for="option1">
								<input id="option1" disabled type="checkbox" value="option 1"> option 1
							</label>
						</div>
						
						<div class="form-group checkbox">
							<label for="option1">
								<input id="option1" type="checkbox" value="option 1"> option 1
							</label>
						</div>
					</div>
				</div>
				</form>
			</div>
			
			<div>
				<ul class="nav nav-pills nav-stacked">
					<li class="active">
						<a href="">
							nav
							<span class="glyphicon glyphicon-phone-alt"></span>
						</a>
					</li>
					<li>
						<a href="">nav</a>
					</li>
					<li>
						<a href="">nav</a>
					</li>
				</ul>
			</div>
			
			<div class="navbar navbar-inverse navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					
					<div class="navar navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li  class="active"><a href="">list item 1</a></li>
							<li><a href="">list item 2</a></li>
							<li><a href="">list item 3</a></li>
						</ul>
						
						<form class="navbar-form " action="" role="search">
							<div class="form-group">
								<input class="form-control"type="search" placeholder="Cari...">
							</div>
							<div class="form-group">
								<div  class="input-group">
									<label for="">
										<button class="btn btn-primary"type="submit">
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</label>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<div>
				<ul class="pager">
					<li>&laquo; Prev</li>
					<li>Next &raquo; </li>
				</ul>
			</div>
			
			<div class="panel panel-default panel-info">
				<div class="panel-heading">
					<h3 class="panel-title text-capitalize">Judul dari panel disini</h3>
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<div class="panel-footer">
					<h3  class="panel-title text-capitalize">ini adala panel footer </h3>
				</div>
			</div>
			
			<div  class="well well-sm">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			
			<ul class="list-group text-capitalize">
				<li  class="list-group-item">
					php
					<span  class="label label-default">
						label php
						<span  class="label label-primary">15</span>
					</span>
				</li>
			</ul>
			
			<div  class="btn-group text-capitalize">
				<button  class="btn btn-warning">
					pesan 
					<span  class="badge">15</span>
				</button>
				<button  class="btn btn-info">
					pesan 
					<span  class="badge">17</span>
				</button>
				<button  class="btn btn-primary">
					pesan 
					<span  class="badge">12</span>
				</button>
			</div>
			
			<div  class="progress">
				<div  class="progress-bar progress-bar-striped progress-bar-danger active" style="width:1%; min-width:40px;">80%</div>
				<div  class="progress-bar progress-bar-striped progress-bar-warning active" style="width:1%; min-width:40px;">80%</div>
			</div>
			
			<div  class="container">
				<div  class="jumbotron">
					<h1>Judul jumbotron</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim illo, placeat voluptatum mollitia, alias laboriosam, excepturi nulla minima aperiam corporis labore. Est sit, nostrum aliquid non quo. At, sed, iusto.
					</p>
					<p>
						<a href="http://youtube.com" class="btn btn-primary ">Get started</a>
					</p>
				</div>
			</div>
			
			<button  class="btn btn-primary btn-lg text-capitalize" data-target="#loginmodal" data-toggle="modal">login user</button>
			<div id="loginmodal" class="modal fade" data-keyboard="false" data-backdrop="static">
				<div  class="modal-dialog modal-lg">
					<div  class="modal-content">
						<div  class="modal-header text-capitalize">
							<button  class="close" data-dismiss="modal">x</button>
							<h4  class="modal-title">login sebagai user</h4>
						</div>
						<div  class="modal-body">
							<form  class="form-horizontal" action=""></form>
							<div  class="form-group">
								<div  class="row">
									<div  class="col-md-2">
										<label for="login_username" class="label-control">username:</label>
									</div>
									<div  class="col-md-10">
										<input  id="login_username" class="form-control" type="text" name="username" value="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div>
				<ul class="nav nav-tabs text-capitalize">
					<li  class="active" data-toggle="tab"><a href="#tab1">Tab 1</a></li>
					<li><a href="#tab2"  data-toggle="tab">Tab 2</a></li>
					<li><a href="#tab3" data-toggle="tab">Tab 3</a></li>
				</ul>
				
				<div class="tab-content">
					<div id="tab1" class="tab-pane active fade in">
						<h3>Tab 1</h3>
					</div>
					<div id="tab2" class="tab-pane fade">
						<h3>Tab 2</h3>
					</div>
					<div id="tab3" class="tab-pane fade">
						<h3>Tab 3</h3>
					</div>
				</div>
			</div>
			
			<div>
				<button id="tooltip" class="btn btn-primary btn-lg" data-toggle="tooltip">Hover disini untuk melihat tooltip</button>
			</div>
			<div>
				<input  id="tooltip_input" title="masukkan username dan password dengan benar" data-toggle="tooltip" type="text">
				<span class="glyphicon glyphicon-info-sign" id="info_login_icon"></span>
			</div>
			
				<button  id="popover_btn" class="btn btn-primary btn-lg" title="title dari popover" data-toggle="popover" data-content="adalah content dari popover" data-trigger="hover" type="text">Button hover popover</button>
				
				<div class="alert alert-danger fade in">
					<a href="#" data-dismiss="alert" class="close">&times;</a>
					<p>
						<strong>Terjadi kesalahan</strong>  saat submit form anda!
					</p>
				</div>
				
				<!--  caroseul -->
				 <div class="col-md-12">
				 	<div id="Mycarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#Mycarousel" data-slide-to="0" class="active"></li>
							<li data-target="#Mycarousel" data-slide-to="1" ></li>
							<li data-target="#Mycarousel" data-slide-to="2" ></li>
							<li data-target="#Mycarousel" data-slide-to="3" ></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img class="img-responsive" src="image/gambar1.jpg" alt="">
								<div class="carousel-caption">This is caption</div>
							</div>
							
							
							<div class="item">
								<img class="img-responsive" src="image/gambar2.gif" alt="">
								<div class="carousel-caption">
									<h3>great caption</h3>
								</div>
							</div>
					 		
							<div class="item">
								<img class="img-responsive" src="image/gambar3.png" alt="">
								<div class="carousel-caption">
									<h2>data caption</h2>
								</div>
							</div>
						</div>
						
						<a class="carousel-control left" href="#Mycarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="carousel-control right" href="#Mycarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
				 	</div>
				 </div>
		</div>
	</body>
</html>