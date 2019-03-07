<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EnDeCo - Panels</title>
	<link href="/templates/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="/templates/admin/css/font-awesome.min.css" rel="stylesheet">
	<link href="/templates/admin/css/datepicker3.css" rel="stylesheet">
	<link href="/templates/admin/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="/templates/admin/https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="/templates/admin/js/html5shiv.js"></script>
	<script src="/templates/admin/js/respond.min.js"></script>
	<![endif]-->
	@yield('custom-css')
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>EnDeCo</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right" style="padding-right: 20px;">
          <!-- Mejlovi notifikacije -->
          <!-- <li class="dropdown" >
            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="/templates/admin/#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="/templates/admin/profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="/templates/admin/#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>

							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="/templates/admin/#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li> -->

					<!-- </a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="/templates/admin/#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="/templates/admin/#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="/templates/admin/#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid --> -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<ul class="nav menu">
			<li><a href="/templates/admin/index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="{{route('datatables')}}"><em class="fa fa-calendar">&nbsp;</em> Tables</a></li>
			<li><a href="{{route('users-logout')}}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


	@yield('content')

		<script src="/templates/admin/js/jquery-1.11.1.min.js"></script>
	<script src="/templates/admin/js/bootstrap.min.js"></script>
	<script src="/templates/admin/js/chart.min.js"></script>
	<script src="/templates/admin/js/chart-data.js"></script>
	<script src="/templates/admin/js/easypiechart.js"></script>
	<script src="/templates/admin/js/easypiechart-data.js"></script>
	<script src="/templates/admin/js/bootstrap-datepicker.js"></script>
	<script src="/templates/admin/js/custom.js"></script>
	@yield('custom-js')
</body>
</html>
