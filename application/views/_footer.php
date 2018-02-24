<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>Bilgiler</h3>
				<ul class="w3_footer_grid_list">
				<li ><a href="<?=base_url()?>">Anasayfa</a><i></i></li>
					<li ><a href="<?=base_url()?>home/hakkimizda">Hakkımızda </a><i></i></li>
					<li ><a href="<?=base_url()?>home/kampanyalar">Kampanyalar </a><i></i></li>
					<li ><a href="<?=base_url()?>home/iletisim">İletişim </a><i></i></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Hesabım</h3>
				<ul class="w3_footer_grid_list">
						<li><a href="<?=base_url()?>uye\hesabim">Hesap Bilgileri</a></li> 
								<li><a href="<?=base_url()?>home\sepetim">Sepetim</a></li>
								<li><a href="<?=base_url()?>uye\siparisler">Siparişlerim</a></li> 
								<li><a href="<?=base_url()?>login\login_cik">Çıkış</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3></h3>
				<ul class="w3_footer_grid_list">
					<li><a href=""> </a></li>
					<li><a href=""> </a></li>
					<li><a href=""></a></li>
					<li><a href=""> </a></li>
					<li><a href=""></a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3></h3>
				
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5></h5>
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="<?php echo base_url(); ?>assets/text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="<?php echo base_url(); ?>assets/js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
