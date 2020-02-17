<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/base.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/skeleton.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/layout.css">
	
</head>
<body>
	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
			<?php echo form_open_multipart('ctrRegis/register', array('class'=>'needs-validation', 'novalidate'=>''));?>
			<form class="form-bg">
				<h2>Register</h2>
				<p><input type="text" name="nama" placeholder="nama"></p>
				<p><input type="date" name="tgl_lahir" placeholder="tgl_lahir"></p>
				<p><input type="text" name="alamat" placeholder="alamat"></p>
				<p><input type="text" name="no_telp" placeholder="no_telp"></p>
				<p><input type="text" name="username" placeholder="username"></p>
				<p><input type="password" name="password" placeholder="password"></p>
				<!-- <label for="remember">
				  <input type="checkbox" id="remember" value="remember" />
				  <span>Remember me on this computer</span>
				</label> -->
				<button input id="submitBtn" type="submit" name="simpan" value="simpan"></button>
			</form>
		</div>

	
		<!-- <p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p> -->


	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='<?php echo base_url() ?>assets/login/js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>