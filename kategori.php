<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
  $tekil_veri_cek = $db->query("SELECT * FROM kategoriler WHERE kategori_durum = 1 AND kategori_seo = '{$_GET["url"]}'  ")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo $tekil_veri_cek["kategori_baslik"]; ?> - Cecemed Saç Bakım Ürünleri </title>
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
				<li class="category1599"> <a href="<?php echo $ayarlar["strURL"]; ?>/urunlerimiz" title="Ürünlerimiz">Ürünlerimiz</a> <span>/</span>  </li>
				<li class="category1599"> <a href="#" title=""><?php echo $tekil_veri_cek["kategori_baslik"]; ?></a> </li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Breadcrumbs End -->
	<h1 class="branding__title reset-font-weight"><?php echo $tekil_veri_cek["kategori_baslik"]; ?></h1>
	</div>
  </div>
  <div class="main-container col2-left-layout bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-lg-9 col-sm-push-3 col-product">
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme">
                   <?php
				$veri_cek = $db->query("SELECT * FROM urunslayt WHERE haber_durum = 1");
 				if ($veri_cek->rowCount()){
				foreach($veri_cek as $veri_listele){
?>  		 <div class="item"> <a href="#"><img alt="" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag"><?php echo 	$veri_listele["haber_baslik"]; ?></div>
                      <h2 class="cat-heading"><?php echo 	$veri_listele["haber_description"]; ?></h2>
                      <p><?php echo 	$veri_listele["haber_kisaaciklama"]; ?></p>
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
          <article class="col-main">
            <div class="category-products">
              <ul class="products-grid">
                           <?php
					$veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND kategori_id = {$tekil_veri_cek["kategori_ust_id"]} ORDER BY proje_ust_id DESC LIMIT 99");
 				if ($veri_cek->rowCount()){
				foreach($veri_cek as $veri_listele){
                    $categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND kategori_ust_id = '{$veri_listele['kategori_id']}'")->fetch(PDO::FETCH_ASSOC); ?>

					 <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                </li>
				    <?php
					}
				}else{
					echo "Listelenecek veri bulunamadı.";
				}
?> 		  </ul>
            </div>
          </article>

        </div>
        <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <aside class="col-left sidebar">
            <div class="side-nav-categories">
              <div class="block-title">Kategoriler</div>
              <!--block-title-->
              <!-- BEGIN BOX-CATEGORY -->
              <div class="box-content box-category">

				<ul>
                  <li>  <?php
									$list = $db->query("SELECT * FROM kategoriler WHERE altkategori_id = 0");
									foreach($list as $row){
					?>
					<ul style="display:block">

					  <li> <a href="<?php echo $ayarlar["strURL"]; ?>/kategori/<?php echo $row["kategori_seo"]; ?>"> <?php echo $row["kategori_baslik"]; ?> </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
						<?php
											$listPage = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND altkategori_id = '".$row["kategori_ust_id"]."' AND dil_id='tr'");
											foreach($listPage as $rowPage){
					?>
                          <li> <a href="<?php echo $ayarlar["strURL"]."/".$row["kategori_seo"]."/".$rowPage["kategori_seo"]."-c-".$rowPage["kategori_ust_id"]; ?>" class=""><?php echo $rowPage["kategori_baslik"]; ?></a> </li>
<?php
											}
					?>
					<!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>


					  </ul>
                   </li>
				   <?php
									}
					?>
                </ul>

              </div>
              <!--box-content box-category-->
            </div>

		 <div class="side-banner"> <img src="<?php echo $ayarlar["strURL"]; ?>/images/sidebanner.jpg"> </div>
</aside>
        </div>
      </div>

      <!-- Main Container End -->

    </div>
  </div>
</div>
 <?php include("alt.php")?>
 <style>
 .box-category > ul > li ul {
    display: none;
    margin: 0 px;
    margin-bottom: 0px;
}
</style>
</body>
</html>
