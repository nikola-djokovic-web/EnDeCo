<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EnDeCo - Login</title>
	<link href="/templates/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="/templates/admin/css/datepicker3.css" rel="stylesheet">
	<link href="/templates/admin/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="/templates/admin/js/html5shiv.js"></script>
	<script src="/templates/admin/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">


			    <form role='form' method="post" action='/login'>
			        @csrf
			      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			        <input value='{{ old('email') }}' class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
			      </div>
			      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			        <input type="password" class="form-control" name="password" placeholder="Password">
			      </div>
							@if(count($errors))
								<div class="form-group">
									<div class="alert alert-danger" role="alert">
										<ul>
											@foreach($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
					        </div>
								</div>
							@endif
						<div class="form-group">
							<p>Don't have an account? Register <a href="/register">here.</a>
							</p>
						</div>
			      <div class="row">
			        <!-- /.col -->
			        <div class="col-xs-4">
			          <button type="submit" class="btn btn-primary btn-block">Log in</button>
			        </div>
			        <!-- /.col -->
			      </div>
			    </form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<script src="/templates/admin/js/jquery-1.11.1.min.js"></script>
	<script src="/templates/admin/js/bootstrap.min.js"></script>
</body>
</html>
