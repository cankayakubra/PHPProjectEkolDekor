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
			<h4>SİPARİŞLER</h4>
			<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Yapılan Sipariş Bilgisi
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body panel_text">
					 <!-- form -->
					<div class="agile-grids">
				        <table id="table-breakpoint">
					<thead>
					 
						
					 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adı soyadı:</th>
						<td><?=$siparis[0]->adsoy?></td>
					</tr>
						 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adres:</th>
						<td><?=$siparis[0]->adres?></td>
					</tr>
					 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telefon:</th>
						<td><?=$siparis[0]->tel?></td>
					</tr>
					 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehir:</th>
						<td><?=$siparis[0]->sehir?></td>
					</tr>
					 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kargo Firma:</th>
						<td><?=$siparis[0]->kargofirma?></td>
					</tr>
					 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kargo no:</th>
						<td><?=$siparis[0]->kargono?></td>
					</tr>
						  
						
						
						
					 
					
					 
					
				  </table>
				  </div>
				  

			
				 
					  <!-- form -->
				  </div>
				</div>
				<hr>
				
				 <div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Siparişe Ait Ürünler
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body panel_text">
					 <!-- form -->
					<div class="agile-grids">
				        <table id="table-breakpoint">
					<thead>
					  <tr>
						
						<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S.NO </th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adı </th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Miktar</th>
					    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birim</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tutar</th>
						  
						
						
						
					  </tr>
					</thead>
					
					<tbody>
					<?php
					$sn=0;
					$top=0;
					foreach($urunler as $rs)
					{ $sn++;
					$tutar=0;
					$top+=$rs->tutar;
					
					?> 
					  <tr>
					   
						<td><?=$sn?></td>
			
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->adi?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->miktar?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->birim?></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->tutar?></td>
						
						
					
					  </tr>
					  <?php } ?>
					 
					</tbody>
				  </table>
				  </div>
			
				 
					  <!-- form -->
				  </div>
				</div>
			
					
					
				
				
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