<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login - Administrator</title>
	<link rel="icon" type="icon" href="{{ URL::to('/images/site/fc-icon.png') }}" >
    {!! HTML::style('/stylesheet/bootstrap.min.css') !!}
    {!! HTML::style('/stylesheet/font-awesome.min.css') !!}
    {!! HTML::style('/stylesheet/admin/categories.css') !!}
    {!! HTML::style('/stylesheet/admin/index.css') !!}
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
				<div class="form-admin">
					<form action="" method="POST" role="form">
						<legend class="title-admin">LOGIN SYSTEM ADMINISTRATOR</legend>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" id="" placeholder="Input your username...">
						</div>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control" id="" placeholder="Input your password...">
						</div>
						<button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> LOGIN</button>
						<button class="btn btn-danger"><i class="fa fa-mail-forward"></i> VISIT WEBSITE </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<style>
	html{width: 100%; height: 100%;}
	.container, .container>div, .container>div>div{height: 100%}
	body{
		background: url(../images/site/noucamp.jpg) no-repeat;
		background-size: 100% 100%;
		position: relative;
		height: 100%;
		width: 100%;
	}
	.input-group{
		margin-bottom: 20px;
	}
	.input-group-addon{
		border-radius: 0;
	}
	.form-admin{
		padding: 30px 10px;
		background: rgba(0,0,0,0.5);
		position: absolute;
		top: 50%;
		-webkit-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		-o-transform: translateY(-50%);
		transform: translateY(-50%);
	}
	.title-admin{
		font-family: "AvoBold", sans-serif;
		color: #fff;
	}
	@media only screen and (max-width: 768px) and (max-height: 500px){
		
	}
	@media only screen and(max-width: 768px){
		
	}
</style>
</html>