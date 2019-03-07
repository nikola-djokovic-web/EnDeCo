<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EnDeCo - Register</title>
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
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					<form role="form" method="POST" action="{{route('users-register')}}">
            @csrf
						<fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Name" name="name" type="text" value="{{old('name')}}" autofocus="" required>
              </div>
              <div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" value="{{old('email')}}" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
							</div>
              <div class="form-group">
                <input class="form-control" placeholder="Repeat password" name="password_confirmation" id='password_confirmation' type="password" value="" required>
              </div>
              @include('templates.admin.partials.error-message')
							<div class="form-group">
								<p>Already have an account? Login <a href="/login">here.</a>
								</p>
							</div>
							<button type="submit" class="btn btn-primary">Register</button>
            </fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<script src="/templates/admin/js/jquery-1.11.1.min.js"></script>
	<script src="/templates/admin/js/bootstrap.min.js"></script>
</body>
</html>
