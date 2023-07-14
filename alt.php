<!-- Footer -->
<footer id="footer">
<div class="contacts">
<div class="container">
<div class="row">
<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
<div class="contacts-address"> <span class="icon-pins"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <font><?php echo $ayarlar["strAddress"]; ?></font> </div>
</div>
<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
<div class="social">
<ul>
<li><a href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="https://www.twitter.com/<?php echo $ayarlar["strTwitter"]; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
 </ul>
</div>
</div>
</div>
</div>
</div>
<div class="footer-container">
<div class="container">
<div class="row">
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div style="text-align:center;" >
<div><img src="<?php echo $ayarlar["strURL"]; ?>/images/logo.png" alt="CeceMed"></div>
<div class="phone-footer"><a href="tel:<?php echo $ayarlar["strPhone"]; ?>" style="font-size: 37px;"> <?php echo $ayarlar["strPhone"]; ?> </a></div>
<div  style=" padding-left: 0;" class="payment-option"> <i class="" aria-hidden="true"></i> <i class="" aria-hidden="true"></i> <i class="" aria-hidden="true"></i> <i class="" aria-hidden="true"></i> </div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wrapper">
<h3>Hızlı Menü</h3>
<ul class="links">
<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"  >Anasayfa</a></li>
<li><a href="<?php echo $ayarlar["strURL"]; ?>/hakkimizda" >Hakkımızda</a></li>
<li><a href="<?php echo $ayarlar["strURL"]; ?>/urunlerimiz"  >Ürünlerimiz</a></li>
<li><a href="<?php echo $ayarlar["strURL"]; ?>/klinik-calisma"  >Klinik Çalışma</a></li>
<li><a href="<?php echo $ayarlar["strURL"]; ?>/bayiler"  >Bayiler</a></li>
 <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"  >İletişim</a></li>
</ul>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wrapper">
<h3>Ürünlerimiz</h3>
<ul class="links">

<?php
				$veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = 'tr' ORDER BY proje_ust_id DESC LIMIT 6");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
                    $categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND kategori_ust_id = '{$veri_listele['kategori_id']}' AND dil_id='tr'")->fetch(PDO::FETCH_ASSOC); ?> 			 
			 
					<li><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>" title="<?php echo $row["kategori_baslik"]; ?>"><?php echo 	$veri_listele["proje_baslik"]; ?></a></li>
<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?> 
</ul>
</div>

</div>
</div>
</div>
<div class="footer-middle">
<div class="container">
<div class="row"> </div>
</div>
</div>
<!-- Brand Logo --> 

</div>
<div class="footer-bottom">
<div class="container">
<div class="row"> 
<!-- Block links module -->
<div class="col-sm-5 col-xs-12 coppyright">  <?php echo date("Y"); ?>  Cecemed &copy;  Her Hakkı Saklıdır</div>
<div class="col-sm-7 col-xs-12 company-links">
<ul class="links">
<li> <a href="https://www.seyhanweb.com" rel="dofollow" title="Seyhanweb">Tasarım: Seyhan Web</a> </li>
</ul>
</div>
<!-- /Block links module --> 
</div>
</div>
</div>
</div>
</footer>

<!-- End Footer --> 

<!-- mobile menu -->
<div id="mobile-menu">
<ul>

<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"  >Anasayfa</a></li>
<li><a href="<?php echo $ayarlar["strURL"]; ?>/hakkimizda" >Hakkımızda</a></li>

<li><a href="#">Ürünlerimiz</a>

<ul>

<?php 
									$list = $db->query("SELECT * FROM kategoriler WHERE altkategori_id='0'");
									foreach($list as $row){
					?> 

										<li> <a href="<?php echo $ayarlar["strURL"]."/".$row["kategori_seo"]."/".$rowPage["kategori_seo"]."-c-".$rowPage["kategori_ust_id"]; ?>"> <?php echo $row["kategori_baslik"]; ?>  </a>
											<ul class="level1">
					<?php 
											$listPage = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND altkategori_id = '".$row["kategori_ust_id"]."' AND dil_id='tr'");
											foreach($listPage as $rowPage){
					?>
												<li class="level2 nav-6-1-1"><a href="<?php echo $ayarlar["strURL"]."/".$row["kategori_seo"]."/".$rowPage["kategori_seo"]."-c-".$rowPage["kategori_ust_id"]; ?>"><?php echo $rowPage["kategori_baslik"]; ?></a> </li>  
					<?php 
											}
					?>
											</ul>
										</li> 

					<?php 
									}
					?>
					
  

</ul>

 
</li>
<li><a href="<?php echo $ayarlar["strURL"]; ?>/klinik-calisma"  >Klinik Çalışma</a></li>
<li><a href="<?php echo $ayarlar["strURL"]; ?>/bayiler"  >Bayiler</a></li>
<li><a href="<?php echo $ayarlar["strURL"]; ?>/blog"  >Blog</a></li>
<li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"  >İletişim</a></li>

</ul>

</div>

<!-- JavaScript --> 
<script type="text/javascript" src="<?php echo $ayarlar["strURL"]; ?>/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo $ayarlar["strURL"]; ?>/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo $ayarlar["strURL"]; ?>/js/revslider.js"></script> 
<script type="text/javascript" src="<?php echo $ayarlar["strURL"]; ?>/js/common.js"></script> 
<script type="text/javascript" src="<?php echo $ayarlar["strURL"]; ?>/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?php echo $ayarlar["strURL"]; ?>/js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="<?php echo $ayarlar["strURL"]; ?>/js/countdown.js"></script> 

<script>
document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
// DOMContentLoaded  end
</script>