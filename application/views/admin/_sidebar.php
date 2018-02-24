		<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="<?php echo base_url(); ?>admin"><i class="fa fa-home"></i> <span>Anasayfa</span></a></li>
										
										
									<li id="menu-academico" ><a href="<?php echo base_url(); ?>admin/uyeler"><i class="fa  fa-group (alias)"></i><span>Uyeler</span></a></li>
									<li><a href="<?php echo base_url(); ?>admin/urunler"><i class="fa  fa-gift" aria-hidden="true"></i><span>Urunler</span></a></li>
									<li id="menu-academico" ><a href="<?php echo base_url(); ?>admin/ayarlar"><i class="fa fa-cog" aria-hidden="true"></i><span>Ayarlar</span><div class="clearfix"></div></a></li>
									
									 <li id="menu-academico" ><a href="<?php echo base_url(); ?>admin/mesaj"><i class="fa fa-envelope nav_icon" aria-hidden="true"></i><span>Web Mesaj</span><div class="clearfix"></div></a></li>
									  <li id="menu-academico" ><a href="<?php echo base_url(); ?>admin/kategoriler"><i class="fa fa-envelope nav_icon" aria-hidden="true"></i><span>Kategoriler</span><div class="clearfix"></div></a></li>
									 <li id="menu-academico" ><a href=""><i class="fa fa-list-ul" aria-hidden="true"></i><span> Siparisler</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="<?php echo base_url(); ?>admin/siparisler">Yeni</a></li>
											<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url(); ?>admin/siparisler/siparisler_onayli">Onaylananlar</a></li>
											<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url(); ?>admin/siparisler/kargodakiler">Kargodakiler</a></li>
											<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url(); ?>admin/siparisler/tamamlananlar">Tamamlananlar</a></li>
										  </ul>
										</li>
									
									
									  
									
									
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
							