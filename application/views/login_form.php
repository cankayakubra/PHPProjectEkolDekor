	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?=base_url()?>">Home</a><span>|</span></li>
				<li><a href="">Login</a><span>|</span></li>
				<?php 
				if($this->session->flashdata("mesaj")) { ?>
				<?php } 
							else
								{?>
				<li><p><?=$this->session->flashdata("mesaj")?></p></a></li>
					<?php }
					?>
			</ul>
		</div>
	</div>
<html>
<head>
<title><?=$sayfa?> <?=$veri[0]->adi?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>

			
		
	
	<div class="w3_login">
			<h3>Giriş Yapınız</h3>
			
			<div class="w3_login_module">
			
			
			
				<div class="module form-module">
					
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
				  
					<div class="tooltip">Kayıt Ol</div>
				  </div>
				  <div class="form">
					<h2>Lütfen Bilgileri Giriniz</h2>
					<form action="<?php echo base_url(); ?>Login\login_ol" method="post">
					
					
					
					  <input type="email" name="eposta" placeholder="email" required=" ">
					  <input type="password" name="sifre" placeholder="Password" required=" ">
					  <input type="submit" value="Giris">
					</form>
				  </div>
				  <div class="form" >
					<h2>Yenı kullanıcı Oluştur</h2>
					<form  action="<?=base_url()?>Login/uyekayit" onsubmit="return validateForm()" method="post">
					<input type="text" name="adsoy" placeholder="Adı Soyadı" required=" ">
					    <input type="email" name="email" placeholder="Email Address" required=" ">
					  <input type="password" name="sifre" placeholder="Password" required=" ">
					
					  <input type="text" name="tel" placeholder="Phone Number" required=" ">
					  <input type="submit" value="Kaydol">
					</form>
				  </div>
				  	
				
			</div>
			
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
	