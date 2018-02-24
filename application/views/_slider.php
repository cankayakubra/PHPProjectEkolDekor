		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
					<?php
						$say=0;
						$aktf=null;
						foreach($kampanya as $rs)
						{ 
						$say++;
						if($say==1)
							$aktf="active";
						else 
							$aktf=null;
						?>

						<li>
							<div class="w3l_banner_nav_right_banner" style="background:url('<?=base_url();?>uploads/<?=$rs->resim;?>') #9eb9b978 no-repeat; background-position:center; background-size:initial">
								
								<h3><?=$rs->adi?> <span><?=$rs->description?></span><span><?=$rs->sfiyat?>TL</span></h3>
								<div class="more">
									<div class="snipcart-details toap_brand_home_details">
											<form action="<?=base_url()?>home/urundetay/<?=$rs->Id?>" method="post">
												<fieldset>
													
													<input type="submit" name="submit" value="Detay" class="button" />
												</fieldset>
											</form>
										</div>
								</div>
							</div>
						
						</li>

							<?php }?>
							
							
						
					</ul>
				</div>
			</section>
					<!-- flexSlider -->
				<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		<div class="clearfix"></div>
	</div>