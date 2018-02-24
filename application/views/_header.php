
<!DOCTYPE html>
<html>
<head>
<title><?=$sayfa?> <?=$veri[0]->adi?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" " />
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
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
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="<?=base_url()?>home/kampanyalar">En Çok Sipariş Edilenler</a>
		</div>
		<div class="w3l_search">
			
		</div>
		<div class="product_list_header">  
			<form action="<?=base_url()?>home/sepetim" method="post" class="last">
                <fieldset>
                    
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="Sepeti Göster" class="button" />
                </fieldset>
            </form>
		</div>
	
		
		
		
		<div class="w3l_header_right" >
			
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
						
						
							<ul class="dropdown-menu drp-mnu">
							<?php 
							if($this->session->userdata("uye_session"))
							{?>
							   <li><?=$this->session->uye_session["adsoy"]?></a></li>
							
								<li><a href="<?=base_url()?>uye\hesabim">Hesap Bilgileri</a></li> 
								<li><a href="<?=base_url()?>home\sepetim">Sepetim</a></li>
								<li><a href="<?=base_url()?>uye\siparisler">Siparişlerim</a></li> 
								<li><a href="<?=base_url()?>login\login_cik">Çıkış</a></li>
							</ul>
							<?php } 
							else
							
						        
								{?>
								<li><a href="<?=base_url()?>Login\login_ol">Giriş</a></li> 
								<?php }
								?>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="<?=base_url()?>home/bize_yazin">Bize yazın</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="<?=base_url()?>"><span>Ekol </span> Dekor</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
				    <?php
					$anasayfa=null;
					$hakkimizda=null;
					$kampanyalar=null;
					$iletisim=null;
					if ($menu=="anasayfa")
						$anasayfa="active";
					if ($menu=="hakkimizda")
						$anasayfa="active";
					if ($menu=="kampanyalar")
						$kampanyalar="active";
					if ($menu=="iletisim")
						$iletisim="active";
				    ?>
					<li class="<?=$anasayfa?>"><a href="<?=base_url()?>">Anasayfa</a><i>/</i></li>
					<li class="<?=$hakkimizda?>"><a href="<?=base_url()?>home/hakkimizda">Hakkımızda </a><i>/</i></li>
					<li class="<?=$kampanyalar?>"><a href="<?=base_url()?>home/kampanyalar">Kampanyalar </a><i>/</i></li>
					<li class="<?=$iletisim?>"><a href="<?=base_url()?>home/iletisim">İletişim </a><i>/</i></li>
				</ul>
			</div>
			
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><i class="fa fa-phone" aria-hidden="true"></i>0507 991 14 11</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">cankayakubra@hotmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>		
		</div>
	
<!-- //header -->