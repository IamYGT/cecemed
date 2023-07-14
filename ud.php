 <?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 
 	 $tekil_veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND proje_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC); 
    $categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_ust_id = {$tekil_veri_cek['kategori_id']} AND dil_id = 'tr'")->fetch(PDO::FETCH_ASSOC); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo $tekil_veri_cek["proje_baslik"]; ?> - Cecemed Saç Bakım Ürünleri </title>
<?php include("css.php")?>
</head>

<body class="common-home">
<div id="page"> 
 <?php include("ust.php")?>
 <div class="featured-branding__branding">
     <div class="container">
    <!-- Breadcrumbs -->
	  <div class="breadcrumbs">
		<div class="">
		  <div class="row">
			<div class="col-xs-12">
			  <ul>
				<li class="home"> <a href="<?php echo $ayarlar["strURL"]; ?>/index" title="Anasayfa">Anasayfa</a> <span>/</span> </li>
				<li class="home"> <a href="<?php echo $ayarlar["strURL"]; ?>/urunlerimiz" title="Ürünler">Ürünler</a> <span>/</span> </li>
				<li class="category1599"> <a href="#" title=""><?php echo $tekil_veri_cek["proje_baslik"]; ?></a> </li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Breadcrumbs End -->
	<h1 class="branding__title reset-font-weight"><?php echo $tekil_veri_cek["proje_baslik"]; ?></h1>
	</div>
  </div>
  
  <!-- Main Container -->
  <section style="padding: 65 px 0;" class="main-container col1-layout">
    <div class="main">
        <div class="row"> 
        <div class="col-main">
            <div class="container">
              <div class="row">
                <div class="product-view">
                  <div class="product-essential">
                    <form action="#" method="post" id="product_addtocart_form">
                      <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                      <div class="product-img-box col-lg-5 col-sm-6 col-xs-12">
                         <div class="product-image">
                          <div  style="    text-align: center;"  class="product-full"> 
						  <img id="product-zoom" style="   
    margin-bottom: 33px;
    " src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $tekil_veri_cek["proje_resim"]; ?>"  data-zoom-image="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $tekil_veri_cek["proje_resim"]; ?>" alt="product-image"> </div>
                          <div class="more-views">
                            <div class="slider-items-products">
                              <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                                <div class="slider-items slider-width-col4 block-content">
								 <?php
                            $imagesList = $db->query("SELECT * FROM files WHERE ustid = {$tekil_veri_cek["proje_ust_id"]} AND itable = 2 ");
                            if ($imagesList->rowCount()){
                                foreach($imagesList as $image){
                    ?> 
                  
                                  <div class="more-views-items"> <a href="#" data-image="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $image["name"]; ?>" data-zoom-image="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $image["name"]; ?>"> <img id="product-zoom" src="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $image["name"]; ?>" alt="product-image"> </a></div>
                                    <?php
                                }
                            }
                    ?>
 
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end: more-images --> 
                      </div>
                      <div class="product-shop col-lg-7 col-sm-6 col-xs-12">
                        
                        <div class="product-name">
                          <h1><?php echo $tekil_veri_cek["proje_baslik"]; ?></h1>
                        </div>
                        
                        <div class="ratings">
                     
                        </div>
                         
                        
                        <div class="add-to-box">
                          <div class="add-to-cart">
                            <div class="pull-left">
                               
                            </div>
                           </div>
                           
                        </div>
                        <div class="short-description">
			<?php echo $tekil_veri_cek["proje_kisaaciklama"]; ?>
			</div>
                        <div class="social">
						 
                          <ul>
                            <li class="fb pull-left"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="tw pull-left"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                             <li class="pintrest pull-left"><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li class="linkedin pull-left"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          
            <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
              <div class="add_info">
              <div class="product-info">
              <div class="container">
                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                  <li class="active"> <a href="#product_tabs_description" data-toggle="tab">  Faydalar & Sonuçlar </a> </li>
				  <li><a href="#nasiluygulanir" data-toggle="tab">Nasıl Uygulanır</a></li>
                  <li><a href="#aktif" data-toggle="tab">Aktif İçerikler</a></li>

                 </ul>
                </div>
                </div>
                <div class="container">
                <div id="productTabContent" class="tab-content">
                  <div class="tab-pane fade in active" id="product_tabs_description">
                    <div class="std">
                      <p><?php echo $tekil_veri_cek["proje_aciklama"]; ?> </p>
                     </div>
                  </div> 
				  
				   <div class="tab-pane fade" id="nasiluygulanir">
                    <div class="std">
                      <p><?php echo $tekil_veri_cek["proje_keywords"]; ?> </p>
                     </div>
                  </div> 
				   <div class="tab-pane fade" id="aktif">
                    <div class="std">
                      <p><?php echo $tekil_veri_cek["proje_aktif"]; ?> </p>
                     </div>
                  </div>
				  
				  </div>
              </div>
            </div>
          </div>  
		  
		  
		 </div>
 


  </section>

<div class="banner-container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="banner-inner">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-1"  >
            <div class="figure-content"><a> <img alt="Blog" src="<?php echo $ayarlar["strURL"]; ?>/images/1.jpg"> </a>
              <div class="card-content1">
                <div class="card-branding" href="#">
                  <h4 class="branding__title"> Spring Summer <br>
                    Collection</h4>
                  <a class="banner-button" href="#">Buy now</a></div>
              </div>
            </div>
          </div>
          <div  style="margin-top: 40px; ;" class="col-lg-6 col-md-6 col-sm-12 col-2">
            <div class="figure-content"><a> <img alt="Blog" src="<?php echo $ayarlar["strURL"]; ?>/images/2.jpg"> </a>
              <div class="card-content2">
                <div class="card-branding" href="#">
                  <h4 class="branding__title"> Cute Clothers <br>
                    For Small People</h4>
                  <a class="banner-button" href="#">SHOP NOW</a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-1"  >
            <div class="figure-content"><a> <img alt="Blog" src="<?php echo $ayarlar["strURL"]; ?>/images/3.jpg"> </a>
              <div class="card-content1">
                <div class="card-branding" href="#">
                  <h4 class="branding__title"> Spring Summer <br>
                    Collection</h4>
                  <a class="banner-button" href="#">Buy now</a></div>
              </div>
            </div>
          </div>
          <div  style="margin-top: 40px; ;" class="col-lg-6 col-md-6 col-sm-12 col-2">
            <div class="figure-content"><a> <img alt="Blog" src="<?php echo $ayarlar["strURL"]; ?>/images/4.jpg"> </a>
              <div class="card-content2">
                <div class="card-branding" href="#">
                  <h4 class="branding__title"> cecemed sweden <br>
                    For Small People</h4>
                  <a class="banner-button" href="#">Detaylı İncele</a> </div>
              </div>
            </div>
          </div>
           
        </div>
      </div>
    </div>
  </div>
  
   </div>
<?php include("alt.php")?>
<script type="text/javascript" src="<?php echo $ayarlar["strURL"]; ?>/js/cloud-zoom.js"></script>
</body>
</html>