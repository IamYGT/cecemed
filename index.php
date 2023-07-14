 <?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Anasayfa - Cecemed Saç Bakım Ürünleri </title>
<?php include("css.php")?>
</head>

<body class="common-home">
<div id="page"> 
 <?php include("ust.php")?>
<div id="content"> 
  <!-- Slider -->
  <div class="home-slider5 active-block">
    <div id="thmg-slideshow" class="thmg-slideshow">
      <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
        <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
          <ul>
            
			    <?php
				$veri_cek = $db->query("SELECT * FROM slayt WHERE slayt_durum = 1");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 		<li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>'><img src='<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner">
              <div class="container">
                <div class="content_slideshow">
                  <div class="row">
                    <div class="info">
                      <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><?php echo 	$veri_listele["slayt_baslik"]; ?></div>
                      <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><?php echo 	$veri_listele["slayt_aciklama"]; ?> </div>
                      <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a class="link_more" href="<?php echo 	$veri_listele["slayt_butonlink"]; ?>" tabindex="0"><i class="fa fa-plus-circle" aria-hidden="true"></i>Ürüne Git</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
 
			</ul>
          <div class="tp-bannertimer"></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- end Slider -->
  
  <div class="banner-container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="banner-inner">
        <div class="row">
         <?php
				$veri_cek = $db->query("SELECT * FROM slaytalti WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 3");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> <div class="col-lg-4 col-md-4 col-sm-12 col-1">
            <div class="figure-content"><a> <img alt="<?php echo $veri_listele["haber_baslik"]; ?>" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>"> </a>
              <div class="card-content1">
                <div class="card-branding" href="#">
                  <h4 class="branding__title"> <?php echo $veri_listele["haber_baslik"]; ?></h4>
                  <a class="banner-button" href="<?php echo 	$veri_listele["haber_kisaaciklama"]; ?>"><?php echo 	$veri_listele["haber_description"]; ?></a></div>
              </div>
            </div>
          </div>
          <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
		  </div>
      </div>
    </div>
  </div>  
  <div class="best-pro-outer">
    <div class="container">
      <div class="row"> 
        <!-- Popular Products -->
        <div class="col-md-12">
          <div class="bestsell-pro">
            <div class="slider-items-products">
              <div class="bestsell-block">
                <div class="h2 products-section-title">Ürünler</div>
                <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4 products-grid block-content">
                       <?php
				$veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = 'tr' ORDER BY proje_ust_id DESC LIMIT 4");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
                    $categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND kategori_ust_id = '{$veri_listele['kategori_id']}' AND dil_id='tr'")->fetch(PDO::FETCH_ASSOC); ?> 			 
					
                    <div class="item">
                      <div class="item-inner">
                        <div class="productborder">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="<?php echo 	$veri_listele["proje_baslik"]; ?>" href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"> <img style=" margin-top: 23px;   margin-bottom: 23px;" alt="<?php echo 	$veri_listele["proje_baslik"]; ?>" src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $veri_listele["proje_resim"]; ?>"> </a> 
                               <div class="item-box-hover">
                                <div class="box-inner">
                                  
                                  <div class="product-detail-bnt"><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>" class="button detail-bnt"><span>Ürünü İncele</span></a></div>
                                 </div>
                              </div>
                            </div>
                          </div>
                          <div class="right-block">
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="<?php echo 	$veri_listele["proje_baslik"]; ?>" href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"> <?php echo 	$veri_listele["proje_baslik"]; ?></a>
                                  <h5> <?php echo $categoryInfo["kategori_baslik"]; ?> </h5>
                                </div>
                                 
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
					<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <div class="container">
    <div>
      <div class="blog-outer-container">
        <div class="block-title">
          <h2>Blog</h2>
        </div>
        <div class="blog-inner">
       
   <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 3");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>  <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="entry-thumb image-hover2"> <a href="<?php echo $ayarlar["strURL"]; ?>/blog-detay/<?php echo $veri_listele["haber_seo"]; ?>"> <img alt="<?php echo 	$veri_listele["haber_baslik"]; ?>" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>"> </a> </div>
            <div class="blog-preview_info">
              <ul class="post-meta">
                <li><img src="<?php echo $ayarlar["strURL"]; ?>/images/member1.png" alt="user"> Yazan: <a href="#">Cecemed</a> </li>
                <li><i class="fa fa-calendar"></i><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></li>
              </ul>
              <h4 class="blog-preview_title"><a href="<?php echo $ayarlar["strURL"]; ?>/blog-detay/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h4>
            </div>
          </div>
            <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
			</div>
      </div>
    </div>
  </div>
  
   
</div>
<?php include("alt.php")?>
<script>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 1170,
	            startheight:880,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'on',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script> 
<!-- Hot Deals Timer 1--> 
<script type="text/javascript">
var dthen1 = new Date("12/25/17 11:59:00 PM");
	start = "05/09/15 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_1";
	CountBack_slider(gsecs1, "countbox_1", 1);
</script>
</div></body>
</html>
