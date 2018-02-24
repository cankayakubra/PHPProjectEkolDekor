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
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Ürün Liste
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
						
						<th>Ürün Kodu</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adı</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kategorisi</th>
						
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Satış Fiyatı</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resim</th>
						
					  </tr>
					</thead>
					
					<tbody>
					<?php
					foreach($veriler as $rs)
					{
					?> 
					  <tr>
					   
						<td><?=$rs->kodu?></td>
			
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->adi?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->katadi?></td>
						
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->sfiyat?></td>
						<td>
						<?php if($rs->resim) {?>
						<a href="<?php echo base_url()?>admin/urunler/resim_ekle/<?=$rs->Id ?>" >
						<img src="<?php echo base_url()?>uploads/<?=$rs->resim?>" height="30"></a>
						<?php } 
						else{ 
						?>
						<a href="<?php echo base_url()?>admin/urunler/resim_ekle/<?=$rs->Id ?>" class="hvr-icon-float-away col-24" >
						Resim Ekle </a>
						<?php } ?>
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