     <?php
	 $this->load->view('_header');
	
	?>
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?=base_url()?>">Home</a><span>|</span></li>
				<li><a href="">sepet</a><span>|</span></li>
				<?php 
				if($this->session->flashdata("mesaj"))
				{
			   ?>
				<li><a ><?=$this->session->flashdata("mesaj")?></a></li>
				<?php
				}
				?>
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
			<h4>Mesajlar</h4>
			<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Gelen mesajlar
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
						
						<th>Adı Soyadı</th>
						<td><?=$veri[0]->adsoy?></td>
					  </tr>
					    <tr>
						<th>Email</th>
						<td><?=$veri[0]->email?></td>
						  </tr>
						    <tr>
						<th>Telefon</th>
						<td><?=$veri[0]->tel?></td>
						  </tr>
						    <tr>
						<th>Mesaj</th>
						<td><?=$veri[0]->mesaj?></td>
						  </tr>
						  <tr>
						<th>Durum</th>
						<td><?=$veri[0]->durum?></td>
						  </tr>
						    <tr>
						<th>Tarih</th>
						<td><?=$veri[0]->tarih?></td>
						  </tr>
					
					  </tr>
					</thead>
					
					
				  </table>
   
</div>

					  <!-- form -->
				  </div>
				</div>
				<br>
				
			
					
					  <!-- form -->
				
				
			  </div>
			  
			  
			</div>
			
			 <!-- form -->
			
				 
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