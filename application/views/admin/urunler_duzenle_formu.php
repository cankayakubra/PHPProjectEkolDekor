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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.basictable.min.js"></script>
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
                <li class="breadcrumb-item"><a href="index.html">Ürünleri Düzenleme Menüsü</a> <i class="fa fa-angle-right"></i></li>
				
            </ol>

<div   class="agileinfo-grap" style="width:100%;"  >  

   	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" action="<?php echo base_url(); ?>/admin/urunler/guncelle/<?=$veri[0]->Id?>">
         	<div class="vali-form">
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Ürün Kodu</label>
              <input type="text" name="kodu"  value="<?=$veri[0]->kodu?>" placeholder="kodu" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Adı</label>
              <input type="text" name="adi" value="<?=$veri[0]->adi?>" placeholder="adi" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group2 group-mail">
              <label class="control-label" name="kategori" >Kategori</label>
            <select name="kategori" >
			<option  value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>
			<?php foreach ($veriler as $rs) {?>
            	<option  value="<?=$rs->Id?>"><?=$rs->adi?></option>
            <?php } ?>	
            </select>
            </div>
           
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Turu</label>
              <input type="text"  name="turu" value="<?=$veri[0]->turu?>" placeholder="turu" required="">
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Satış fiyatı</label>
              <input type="text"  name="sfiyat" value="<?=$veri[0]->sfiyat?>" placeholder="sfiyat" required="">
             <div class="clearfix"> </div>
			
           
            <div class="vali-form">
            
            
            <div class="clearfix"> </div>
			
            </div>
             <div class="vali-form vali-form1">
            
            
            <div class="clearfix"> </div>
			
            </div>
             
             <div class="clearfix"> </div>
           
            
            
            
            </div>
			 <script src="<?php echo base_url(); ?>/ckeditor/ckeditor.js"></script>
			 Açıklama: <br>
			 <textarea name="aciklama" id="aciklama" rows="10" cols="100">
                <?=$veri[0]->aciklama?>
            </textarea>
			<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'aciklama' );
            </script>
            
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">GÜNCELLE</button>
             
            </div>
          <div class="clearfix"> </div>
        </form>
		
    
 	<!---->
 </div>

</div>
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

