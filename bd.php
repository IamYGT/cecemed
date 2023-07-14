<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 
	 $tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC); 
?>
 <!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Cecemed Saç Bakım Ürünleri </title>
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
				<li class="category1599"> <a href="<?php echo $ayarlar["strURL"]; ?>/blog" title="">Blog</a> </li>
				<li class="category1599"> <a href="#" title=""><?php echo $tekil_veri_cek["haber_baslik"]; ?></a> </li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Breadcrumbs End -->
	<h1 class="branding__title reset-font-weight"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
	</div>
  </div>
   <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-sm-9 col-sm-push-3 blog-col">
          <article class="col-main">
            <div class="blog-wrapper" id="main">
              <div class="site-content" id="primary">
                <div role="main" id="content">
                  <article class="blog_entry clearfix" id="post-29"> 
                    
                    <!--blog_entry-header clearfix-->
                    <div class="entry-content">
                      <div class="featured-thumb"><a href="#"><img alt="blog-img4" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>"></a></div>
                      <header class="blog_entry-header clearfix">
                        <div class="blog_entry-header-inner">
                          <h2 class="blog_entry-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h2>
                        </div>
                        <!--blog_entry-header-inner--> 
                      </header>
                      <div>
                        <ul class="post-meta">
                           <li><i class="fa fa-clock-o"></i><span class="day"><?php echo $tekil_veri_cek["haber_tarih"]; ?></span></li>
                        </ul>
                        <p><?php echo $tekil_veri_cek["haber_aciklama"]; ?></p>
                      </div>
                    </div>
                  </article> 
                 </div>
              </div>
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
         
          <div role="complementary" class="widget_wrapper13" id="secondary">
            <div class="popular-posts widget widget__sidebar wow bounceInUp animated" id="recent-posts-4">
              <h3 class="widget-title"><span>Son Bloglar</span></h3>
              <div class="widget-content">
                <ul class="posts-list unstyled clearfix">
                     <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 5");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>  <li>
                    <figure class="featured-thumb"> <a href="<?php echo $ayarlar["strURL"]; ?>/blog-detay/<?php echo $veri_listele["haber_seo"]; ?>"> <img width="70" height="60" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>"> </a> </figure>
                    <!--featured-thumb-->
                    <h4><a title="<?php echo 	$veri_listele["haber_baslik"]; ?>" href="<?php echo $ayarlar["strURL"]; ?>/blog-detay/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h4>
                   
                  </li>
				  <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
                </ul>
              </div>
            </div>
                          <!--   
 <div class="popular-posts widget widget_categories wow bounceInUp animated" id="categories-2">
              <h3 class="widget-title"><span>Ürünlerimiz</span></h3>
              <ul>
			  
			   
<?php 
									$list = $db->query("SELECT * FROM kategoriler WHERE altkategori_id='0'");
									foreach($list as $row){
					?> 			
 <li> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="<?php echo $ayarlar["strURL"]."/".$row["kategori_seo"]."/".$rowPage["kategori_seo"]."-c-".$rowPage["kategori_ust_id"]; ?>" title="<?php echo $row["kategori_baslik"]; ?>"><?php echo $row["kategori_baslik"]; ?></a></li>
 <?php 
									}
					?>
					
 
		
		</ul>
            </div>  --> 
          </div>
        </aside>
      </div>
    </div>
  </div>
   
</div>  
<?php include("alt.php")?>
</body>
</html>