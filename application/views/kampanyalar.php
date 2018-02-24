  <?php
	 $this->load->view('_header');
		
	?>
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?=base_url()?>">Home</a><span>|</span></li>
				<li><a href="<?=base_url()?>home/kampanyalar">Kampanyalar</a></li>
			</ul>
		</div>
	</div>
	  <?php
	
		$this->load->view('_sidebar');
	?>
		<div class="w3l_banner_nav_right">
			<div class="w3ls_w3l_banner_nav_right_grid">
				<h3>Kampanyalı Ürünler &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
				<div class="wthree_banner_bottom_left_grid_sub1">
					
					<?php 
					foreach($kampanya as $rs)
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
               
						</div>
					</div>
					
					<div class="col-md-3 w3ls_w3l_banner_left">
						
					</div>
					
					<div class="clearfix"> </div>
				  
				
					
					
					
					
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	
	  <?php

		$this->load->view('_footer');
	?>