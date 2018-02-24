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
                <li class="breadcrumb-item"><a href="">Mesaj Detay Bilgileri</a> <i class="fa fa-angle-right"></i></li>
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
						<th>Notunuz</th>
						<td><form method="post" action="<?php echo base_url(); ?>/admin/mesaj/guncelle/<?=$veri[0]->Id?>" method="post">
							  <textarea name="adminnotu" id="adminnotu" cols="100">
                               <?=$veri[0]->adminnotu?>
                              </textarea>
							 <button type="submit" class="btn btn-primary">Gonder</button>
					</form>
					</td>
					  </tr>
					</thead>
					
					
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

