<!DOCTYPE HTML>
<html>
<head>
<title>Sign In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet"> 
<script src="<?php echo base_url();?>assets/js/jquery.min.js"> </script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"> </script>
</head>
<body>
	<div class="login">
		<h1><a href="<?php echo base_url();?>index.php">ClickPresensi </a></h1>
		<div class="login-bottom">
			<h2>Masuk</h2>
			<form method="post" action="<?php echo base_url("Welcome/masuk"); ?>">
			<div class="col-md-12">
				<div class="login-mail">
					<input type="text" name="nrp" placeholder="NRP" required="">
				</div>
				<div class="login-mail">
					<input type="password" name="kata_sandi" placeholder="Kata Sandi" required="">
				</div>
			</div>
			<div class="col-md-12 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="MASUK">
					</label>
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2017 ClickPresensi. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">Kelompok ADPL</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

