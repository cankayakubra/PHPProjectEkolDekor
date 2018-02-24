
<div class="banner_bottom">
			<div class="wthree_banner_bottom_left_grid_sub">
			</div>
			
			<div class="wthree_banner_bottom_left_grid_sub1">
			   <?php
			foreach($random as $rs)
			{  ?>
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
											<a href=""><img title=" " alt=" " src="<?php echo base_url(); ?>uploads/<?=$rs->resim?>" /></a>		
												<p><?=$rs->adi?></p>
											<h4><?=$rs->sfiyat?> TL<span><?=$rs->ifiyat?>TL</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="<?=base_url()?>home/urundetay/<?=$rs->Id?>" method="post">
												<fieldset>
													
													<input type="submit" name="submit" value="Detay" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
				</div>
			<?php } ?>
				
				<div class="clearfix"> </div>
			</div>
			
			<div class="clearfix"> </div>
			
	</div>
	
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Yeni Ürünler</h3>
			<div class="hover14 column">
					<?php
					foreach ($yeni as $rs)
					{
						?>
			<div class="agile_top_brands_grids">
				<div class="col-md-3 top_brand_left">
					
						<div class="agile_top_brand_left_grid">
						
							<div class="tag"><img src="<?php echo base_url(); ?>assets/images/tag.png" alt=" " class="img-responsive" /></div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
											<a href=""><img height=100 title=" " alt=" " src="<?php echo base_url(); ?>uploads/<?=$rs->resim?>" /></a>		
											<p><?=$rs->adi?></p>
											<h4><?=$rs->sfiyat?> TL</h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="<?=base_url()?>home/urundetay/<?=$rs->Id?>" method="post">
												<fieldset>
												
													<input type="submit" name="submit" value="Detay" class="button" />
												</fieldset>
													
											</form>
									
										</div>
									</div>
								</figure>
							</div>
						</div>
					
					</div>
				</div>
				
				 <?php 
					}?>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>