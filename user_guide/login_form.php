
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Sign In :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>/assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>/assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/admin/css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="<?php echo base_url(); ?>/assets/admin/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/admin/css/jquery-ui.css"> 
<!-- jQuery -->
<script src="<?php echo base_url(); ?>/assets/admin/js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/admin/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Admin Panel Girişi </h2>
		<form action="<?php echo base_url(); ?>/admin/login/login_ol" method="post">
			<div class="email">
				<span class="username">Kullanıcı Adı:</span>
				<input type="text" name="email"  class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Sifre:</span>
				<input type="password" name="sifre" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="rem-for-agile">
				<input type="checkbox" name="remember" class="remember">Beni Hatırla<br>
			</div>
			<div class="clearfix"></div>
			<?php if ($this->session->flashdata("mesaj"))
			{?>
			<div class="bg-danger dark pv20 text-white fw600 text-center"><?=$this->session->flashdata("mesaj")?></div>
			<?php } ?>
			<div class="login-w3">
					<input type="submit" class="login" value="Giris Yap">
			</div>
			<div class="clearfix"></div>
		</form>
				
	</div>
	</div>
	</div>
</body>
</html>