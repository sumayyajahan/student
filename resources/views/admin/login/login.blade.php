<!DOCTYPE html>
<head>
<title>School Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ asset('/') }}assets/admin/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ asset('/') }}assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ asset('/') }}assets/admin/css/font.css" type="text/css"/>
<link href="{{ asset('/') }}assets/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Login</h2>
				</div>
				<form role="form" action="{{ route('login') }}" method="POST">
				  @csrf
					<input id="email" type="email" name="email" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
					<input id="password" type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
					<button type="submit" name="btn" class="register">Login</button>
				</form>
				<div class="signin-text">
					<div class="text-left">
						<p><a href="#"> Forgot Password? </a></p>
					</div>
					<div class="text-right">
						<p><a href="signup.html"> Create New Account</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<h5>- OR -</h5>
				<div class="footer-icons">
					<ul>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="twitter facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter chrome"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="twitter dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<a href="index.html">Back To Home</a>
			</div>
			
			<!-- footer -->
			<div class="copyright">
				<p>© 2016 Colored . All Rights Reserved . Design by <a href="#">Sumayya</a></p>
			</div>
			<!-- //footer -->
			
		</div>
	<script src="{{ asset('/') }}assets/admin/js/proton.js"></script>
</body>
</html>
