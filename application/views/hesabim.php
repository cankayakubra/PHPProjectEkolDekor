     <?php
	 $this->load->view('_header');
	
	?>
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?=base_url()?>">Home</a><span>|</span></li>
				<li><a href="">Hesabim</a></li>
			</ul>
		</div>
	</div>
	    <?php
	
		$this->load->view('_uyesidebar');
	?>
	
<!-- about -->

       <!-- form -->
        <div class="w3l_banner_nav_right">
<!-- faq -->
		<div class="faq">
			<h4>Hesabım</h4>
			<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Hesap Bilgileri
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body panel_text">
					 <!-- form -->
					     <form method="post" action="<?php echo base_url(); ?>uye/uye_guncelle/">
         	<div class="vali-form">
             <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Email</label>
              <input type="text" name="email" value="<?=$uye[0]->email?>" placeholder="email" required="">
            </div>
            
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Sifre</label>
              <input type="text" name="sifre" value="<?=$uye[0]->sifre?>"  required="">
            </div>
            <div class="clearfix"> </div>
			  <br>
				<div class="col-md-6 form-group1 form-last">
              <label class="control-label">Tel</label>
              <input type="text" name="tel" value="<?=$uye[0]->tel?>"  required="">
            </div>
			</br>
			
			<div class="col-md-6 form-group1 form-last">
              <label class="control-label">Adı</label>
              <input type="text" name="adsoy" value="<?=$uye[0]->adsoy?>"  required="">
            </div>
			<br>
			<div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">GÜNCELLE</button>
             
            </div>
			</br>
					  <!-- form -->
				  </div>
				</div>
			  </div>
			
			 
			 
			  
			 
			 
			  
			</div>
		</div>
<!-- //faq -->
		</div>
		<div class="clearfix"></div>
	</div>
		 <!-- form -->
		<div class="clearfix"></div>
	</div>
 	<?php
$this->load->view('_footer');
?>