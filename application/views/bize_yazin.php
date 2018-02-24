	  <?php
	 $this->load->view('_header');
	
	?>
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?=base_url()?>">Home</a><span>|</span></li>
				<li><a href="<?=base_url()?>home/bize_yazin">Bize yazın</a></li>
			</ul>
		</div>
	</div>
		  <?php

		$this->load->view('_sidebar');
	?>
	
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		
		<?php if($this->session->flashdata("mesaj")) {?>
							
							<p> <?=$this->session->flashdata("mesaj")?> </p>
							
							</div>
							<?php } ?>	
		
			
	</div>
		<div class="w3l_banner_nav_right">

		<div class="mail">
			<h3>Bize Yazmak İstediklerinizi Yazın</h3>
			
			
			<div class="agileinfo_mail_grids">
				<div class="col-md-4 agileinfo_mail_grid_left">
					<ul>
						<li><i class="fa fa-home" aria-hidden="true"></i></li>
						<li>Adres<span>Baksan Sanayi Sitesi 57/2 Eskişehir
</span></li>
					</ul>
					<ul>
						<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
						<li>Email<span><a href="">cankayakubra@hotmail.com</a></span></li>
					</ul>
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i></li>
						<li>Bizi Arayın<span>0507 991 14 11</span></li>
					</ul>
				</div>
				<div class="col-md-8 agileinfo_mail_grid_right">
					<form action="<?=base_url()?>home/mesaj_kaydet" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="adsoy" value="Adsoy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'adsoy';}" required="">
							<input type="email" name="eposta" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="tel" value="Tel" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'telefon';}" required="">
							<input type="text" name="konu" value="Konu" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'konu';}" required="">
						</div>
						<div class="clearfix"> </div>
						<textarea  name="mesaj" rows=10 cols=70 onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mesaj';}" required="">Mesaj</textarea>
						<input type="submit" value="Gönder">
						
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //mail -->
		</div>
		<div class="clearfix"></div>
	</div>
	  <?php

		$this->load->view('_footer');
	?>