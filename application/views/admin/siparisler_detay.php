    <?php  
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
		?>
   
   <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<link rel="<?php echo base_url(); ?>assets/admin/stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="<?php echo base_url(); ?>assets/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
     

<!-- tables -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/basictable.css" />
<script type="text/javascript" src=""<?php echo base_url(); ?>assets/admin/js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<link href="<?php echo base_url(); ?>assets/admin///fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href="<?php echo base_url(); ?>assets/admin///fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Siparişler Detay Bilgileri</a> <i class="fa fa-angle-right"></i></li>
				<?php
				if($this->session->flashdata('mesaj'))
{
	?>
				<li class="breadcrumb-item"><a href=""><?=$this->session->flashdata('mesaj');?></a> <i class="fa fa-angle-right"></i></li>
				<?php 
}
?>
				
            </ol>

<div   class="agileinfo-grap" style="width:100%;"  >  
                  <form action="<?php echo base_url(); ?>/admin/siparisler/guncelle/<?=$siparis[0]->Id?>" method="post">
	

  
				  <table id="table-breakpoint">
					<thead>
					  <tr>
						
						<th width="100">Adı Soyadı</th>
						<td><?=$siparis[0]->adi?></td>
					  </tr>
					    <tr>
						<th>Adres</th>
						<td><?=$siparis[0]->adres?></td>
						  </tr>
						    <tr>
						<th>Telefon</th>
						<td><?=$siparis[0]->tel?></td>
						  </tr>
						    <tr>
						<th>Sehir</th>
						<td><?=$siparis[0]->sehir?></td>
						  </tr>
						  <tr>
						<th>Kargo Firma</th>
						<td><input type="text" name="kargofirma"  value="<?=$siparis[0]->kargofirma?>"></td>
						  </tr>
						    <tr>
						<th>Kargo No</th>
						<td><input type="text" name="kargono"  value="<?=$siparis[0]->kargono?>"></td>
						  </tr>
						      <tr>
						<th>Durumu</th>
						<td><select name="durum" >
						<option><?=$siparis[0]->durum?></option>
						<option>Hazırlanıyor</option>
						<option>Onaylandı</option>
							<option>Kargoda</option>
								<option>Tamamlandı</option>
						</select></td>
						  </tr>
							<th>Notunuz</th>
						<td><textarea name="not" id="not" cols="100">
                               <?=$siparis[0]->not?>
                              </textarea>
				              </td>
						  <tr>
						<th></th>
						<td><input type="submit" class="login" value="Giris Yap"></td>
						  </tr>
						
					
					</thead>
					
					
				  </table>
				 
   
</div>
<div   class="agileinfo-grap" style="width:100%;"  >  

  
				  <table id="table-breakpoint">
					<thead>
					  <tr>
						
						<th>S.No </th>
						<th>Adı </th>
						<th>Tarih</th>
						<th>Tutar</th>
						
						<th>Durum</th>
						
						
						
					
						
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
			              <td><?=$rs->adi?></td>
						<td><?=$rs->tarih?></td>
						<td><?=$rs->tutar?></td>
						
						<td><?=$rs->durum?></td>
						
						
						
					
					  </tr>
					  <?php } ?>
					 
					</tbody>
				  </table>
   
</div>


		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		
		</script>

<!--js -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   


    <?php  
		$this->load->view('admin\_footer');
     ?>

