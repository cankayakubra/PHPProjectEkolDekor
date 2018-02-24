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
			<h4>Üye sepet</h4>
			<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Sepet
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
						
						<th>S.No</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ürün Adı</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Miktar</th>
					    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birim</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Satış Fiyatı</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fiyat</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tutar</th>
						
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sil</th>
					  </tr>
					</thead>
					
					<tbody>
					<?php
					$sn=0;
					$top=0;
					foreach($veriler as $rs)
					{ $sn++;
					$tutar=0;
					$tutar=$rs->ufiyat * $rs->miktar;
					$top+=$tutar;
					?> 
					  <tr>
					   
						<td><?=$sn?></td>
			
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->uadi?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->miktar?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->ubirim?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->ufiyat?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$tutar?></td>
						
						<td><a href="<?php echo base_url(); ?>home/sepetsil/<?=$rs->Id?>"  onclick="return confirm(' Silmek istediğinize Emin Misin?')" class="hvr-icon-float-away col-24" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sil</a></td>
					
					  </tr>
					  <?php } ?>
					 
					</tbody>
				  </table>
				  </div>
				  Toplam Tutar:<?=$top ?><br>
				 
					  <!-- form -->
				  </div>
				</div>
				<br>
				
			
					
					  <!-- form -->
				
				
			  </div>
			  
			  
			</div>
			
			 <!-- form -->
				  <div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Kişisel Bilgiler
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body panel_text">
					 <!-- form -->
					  <form action="<?=base_url();?>home/siparis_tamamla/" method="post"/>
								<H3>ADRES BİLGİLERİ</H3>
								<hr>
								Alıcı adı soyadı:<input type="text" name="adsoy" value="<?=$uye[0]->adsoy?>"/>
								Adresi:<input type="text" name="adres" value="<?=$uye[0]->adres?>"/>
								Telefonu:<input type="text" name="tel" value="<?=$uye[0]->tel?>"/><br></br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Şehir:<input type="text" name="sehir" value="<?=$uye[0]->sehir?>"/>
								Toplam Tutar:<input type="text" name="tutar" readonly value="<?=$top ?>"/><br>
								</hr>
								<br>
								<H3>ÖDEME BİLGİLERİ</H3><br>
								Kredi kartı no:<input type="text" name="karno"/>
								Skt Ay:<input type="text" name="ay"/>
								Skt yıl:<input type="text" name="yıl"/><br></br>
								Güvenlik kodu:<input type="text" name="gkodu"/>
								<br></br>
								<fieldset>
								
									<input type="submit" name="submit" value="Alışverişi Tamamla" class="btn btn-primary" />
									
								</fieldset>
							</form>
				 
					  <!-- form -->
				  </div>
				</div>
				<br>
				
			
					
					  <!-- form -->
				
				
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