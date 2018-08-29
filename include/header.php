<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png">
	<title>New Jersey Associations</title>
	
	<link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href="plugins/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
	<link href="plugins/fancyBox/jquery.fancybox.css" rel="stylesheet" />
	<link href="plugins/timeline/css/timeline.min.css" rel="stylesheet" />

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	<!--Link for custom css-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	

</head>
<body>
<div class="user-login">
<a href="javascript:void(0)" class="login-icon"><i class="fa fa-user" aria-hidden="true"></i></a>
<div class="user-info">
<h3>Login</h3>
<form action="#" class="login-form">
	<div class="form-group">
	<input type="text" class="form-control" placeholder="Username">		
	</div>
	<div class="form-group">
	<input type="password" class="form-control" placeholder="Password">		
	</div>
	
<div class="checkbox">
          <label>
            <input type="checkbox" value="">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Remember me
          </label>
        </div>

        <button type="submit" class="btn btn-border-warning">Login</button>

        <div class="reg-forget clearfix">
        	<a href="javascript:void(0)" data-toggle="modal" data-target="#forget-pw" class="pull-left">Forgot your password?</a>
        	<a href="register.php" class="pull-right">Register</a>
        </div>
</form>
	
</div>
	
</div>
	<header class="header">
		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="1" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<a class="navbar-brand" href="index.php"><img src="img/nj_logo.png"></a class="img-responsive">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<div class="container">
						<ul class="nav navbar-nav navbar-left">
							<li><a href="about.php">About</a></li>
							<li><a href="national_history.php">National History</a></li>
							<li><a href="events.php">Events</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="service.php">Service</a></li>
							<li><a href="resources.php">Resources</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div><!-- /.navbar-collapse -->
			</nav>
		</header>







<!-- Modal -->
<div class="modal fade" id="forget-pw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
      <h5>Email Address</h5>
        <form action="#" class="forget-pw clearfix">
        <div class="form-group">
        	<input type="text" class="form-control" placeholder="Enter email address">
        	</div>
        	<div class="btm-wrap pull-right">
        	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning">Send</button>
        </div>
        </form>
            
      </div>

    </div>
  </div>
</div>