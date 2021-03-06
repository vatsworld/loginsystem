<?php
	require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		session_destroy();
	exit();
	}

	$redirectURL = "http://localhost/FacebookLogin/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
?>	
<!doctype html>
<html lang="en">
<head>
<title>Login System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flaty User login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->  
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<!--<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body style="background-image: url(1.jpg); height: 100%">

	<div class="container" style="margin-top: 100px">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="logo.png" style="height: 40%"><br><br>
				<form style="opacity: 50%">
					<input name="email" placeholder="Email" class="form-control"><br>
					<input name="password" type="password" placeholder="Password" class="form-control"><br>
					<input type="submit" value="Log In" class="btn btn-primary">
					<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Facebook" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>

</body>
-->

<body>
	<!-- main -->
	<div class="main-agileits">
		<h1>Login System</h1>
		<div class="mainw3-agileinfo form">
			<div id="login">    
				<form action="#" method="post"> 
					<div class="field-wrap">
						<label> Enter Your Email<span class="req">*</span> </label>
						<input type="email"required autocomplete="off"/>
					</div> 
					<div class="field-wrap">
						<label> Your Password<span class="req">*</span> </label>
						<input type="password"required autocomplete="off"/>
					</div> 
					<p class="forgot"><a href="#">Forgot Password?</a></p> 
					<button class="button button-block"/>Log In</button> 
					<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Facebook" class="button button-block">
				</form> 
			</div>
         
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	<div class="w3copyright-agile">
		<p>Design by Charusat Web Developer</p>
	</div>
	<!-- //copyright --> 
	<script>
	$('.form').find('input, textarea').on('keyup blur focus', function (e) { 
	  var $this = $(this),
		  label = $this.prev('label');

		  if (e.type === 'keyup') {
				if ($this.val() === '') {
			  label.removeClass('active highlight');
			} else {
			  label.addClass('active highlight');
			}
		} else if (e.type === 'blur') {
			if( $this.val() === '' ) {
				label.removeClass('active highlight'); 
				} else {
				label.removeClass('highlight');   
				}   
		} else if (e.type === 'focus') {
		  
		  if( $this.val() === '' ) {
				label.removeClass('highlight'); 
				} 
		  else if( $this.val() !== '' ) {
				label.addClass('highlight');
				}
		}
 
	}); 
	</script>
</body>
</html>