<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="<?php echo base_url();?>/assets3/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>/assets3/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="<?php echo base_url();?>/assets3/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="<?php echo base_url();?>/assets3/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">			
				<form method="post" action="<?php echo base_url().'Welcome_admin/masuk'?>" >
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" class="lock" placeholder="Password">
					<input type="submit" name="Sign In" value="Login">	
					<td colspan="2"><?php echo $err_message;?></td>
				</form>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 Pemadam Kelaparan | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="<?php echo base_url();?>/assets3/js/jquery.nicescroll.js"></script>
		<script src="<?php echo base_url();?>/assets3/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="<?php echo base_url();?>/assets3/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
				