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
			
			<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Fotograf
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body panel_text">
					 <!-- form -->
					     <div   class="agileinfo-grap" style="width:100%;"  >  

  
				  <table id="table-breakpoint">
					<thead>
					  <tr>
					
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resim</th>
						
					  </tr>
					</thead>
					
					<tbody>
					<?php
					foreach($veriler as $rs)
					{
					?> 
					  <tr>
					   
					
						<td>
						<?php if($rs->resim) {?>
						<a href="<?php echo base_url()?>uye/resim_ekle/<?=$rs->Id ?>" >
						<img src="<?php echo base_url()?>uploads/<?=$rs->resim?>" height="30"></a>
						<?php } 
						else{ 
						?>
						<a href="<?php echo base_url()?>uye/resim_ekle/<?=$rs->Id ?>" class="hvr-icon-float-away col-24" >
						Resim Ekle </a>
						<?php } ?>
						</td>
						<td>  <form method="post" action="<?php echo base_url(); ?>/uye/resim_ekle/" enctype="multipart/form-data"> 
         	
					
			<div class="vali-form">
            <div class="form-group">
			
        <label for="exampleInputFile">Ürün Resmi Seç</label>
        <input type="file"name="resim" id="exampleInputFile" onChange="this.form.submit();">
		 <p class="help-block">Yuklenecek resim dosyası(gif/png/jpg ) formatında olmalıdır..</p>
		 <p class="help-block">
        <?php if($this->session->flashdata("mesaj")) {?>
							<h4>Yükleme Hatası </h4>
							<p> <?=$this->session->flashdata("mesaj")?> </p>
							</div>
							<?php } ?>
							
      </div>
            <div class="clearfix"> </div>
            </div>
            
           
             <div class="vali-form vali-form1">
            
            
           
             
             <div class="clearfix"> </div>
           
            
            
            
            </div>
            
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">KAYDET</button>
              
            </div>
          <div class="clearfix"> </div>
        </form>
		</td>
					
					  <?php } ?>
					 
					</tbody>
				  </table>
   
</div>
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