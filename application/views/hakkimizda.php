     <?php
	 $this->load->view('_header');
	
	?>
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?=base_url()?>">Home</a><span>|</span></li>
				<li><a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li>
			</ul>
		</div>
	</div>
	    <?php
	
		$this->load->view('_sidebar');
	?>
	
<div class="w3l_banner_nav_right">
		  <div class="privacy about">
			<h3>   HAKKIMIZDA  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h3>
			 <p class="animi"><?=$veri[0]->hakkimizda?></p>
			
		</div>
<!-- //about -->
</div>
		<div class="clearfix"></div>
	
 	<?php
$this->load->view('_footer');
?>