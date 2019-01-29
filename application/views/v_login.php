<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Dashboard Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?=base_url()?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <h1 style="color: black;"> PHONE MARKET </h1>

  </div>
  <h2 class="form-heading">Login</h2>
  <div class="app-cam">
	  <form action="<?=base_url()?>index.php/login/proses_login"method= "post">
		<input type="text" name="username" class="text" value="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}">
		<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		<div class="login-social-link">
                  </div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Lupa Password?</a></p></li>
			<li class="new_right"><p class="sign">Baru?<a href="register.html"> Daftar</a></p></li>
			<div class="clearfix"></div>
		</ul>
    <?php
  if ($this->session->flashdata('pesan')!= NULL):
  ?>
  <div class="alert alert-danger"><?php echo $this->session->flashdata('pesan'); ?></div>
<?php endif ?>
	</form>

  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2015 Modern. | Akbar Prasetia</a> </p>
   </div>
</body>
</html>
