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
                <li class="breadcrumb-item"><a href="">Kategoriler Listesi</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="<?php echo base_url(); ?>admin/kategoriler/ekle" class="hvr-icon-float-away col-24">Kategori EKLE</a></li>
				<li><a  >	<?=$this->session->flashdata("mesaj")?></a></li>
				  
				
            </ol>

<div   class="agileinfo-grap" style="width:100%;"  >  

  
				  <table id="table-breakpoint">
					<thead>
					  <tr>
						
						<th>S. No</th>
						<th>Parent_Id</th>
						<th>Adı</th>
						
						<th>Durum</th>
						<th>Resim</th>
						
						
						<th>Düzenle</th>
						<th>Sil</th>
					  </tr>
					</thead>
					
					<tbody>
					<?php
					$sno=0;
					foreach($veriler as $rs)
					{
						$sno++;
					?> 
					  <tr>
					   
						<td><?=$sno?></td>
			
						<td><?=$rs->parent_id?></td>
						<td><?=$rs->adi?></td>
						
						<td><?=$rs->durum?></td>
						<td>
						<?php if($rs->resim) {?>
						<a href="<?php echo base_url()?>admin/kategoriler/resim_ekle/<?=$rs->Id ?>" >
						<img src="<?php echo base_url()?>uploads/<?=$rs->resim?>" height="30"></a>
						<?php } 
						else{ 
						?>
						<a href="<?php echo base_url()?>admin/kategoriler/resim_ekle/<?=$rs->Id ?>" class="hvr-icon-float-away col-24" >
						Resim Ekle </a>
						<?php } ?>
						</td>
					
						<td><a href="<?php echo base_url(); ?>admin/kategoriler/duzenle/<?=$rs->Id?>" class="hvr-icon-float-away col-24" >Düzenle</a></td>
						<td><a href="<?php echo base_url(); ?>admin/kategoriler/sil/<?=$rs->Id?>"  onclick="return confirm(' Silmek istediğinize Emin Misin?')" class="hvr-icon-float-away col-24" >Sil</a></td>
					
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

