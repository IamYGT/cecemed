<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Blog - Cecemed Saç Bakım Ürünleri </title>
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
				<li class="category1599"> <a href="#" title="">Blog</a> </li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Breadcrumbs End -->
	<h1 class="branding__title reset-font-weight">Blog</h1>
	</div>
  </div>
  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-sm-12   blog-col">
          <article class="col-main">
            
            <div class="blog-wrapper" id="main">
              <div class="site-content" id="primary">
                <div role="main" id="content">
                     <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> <article class="blog_entry clearfix wow bounceInUp animated col-sm-6" id="post-29">
                    <div class="entry-content">
                      <div class="featured-thumb"><a href="<?php echo $ayarlar["strURL"]; ?>/blog-detay/<?php echo $veri_listele["haber_seo"]; ?>"><img alt="blog-img3" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>"></a></div>
                      <header class="blog_entry-header clearfix">
                        <div class="blog_entry-header-inner">
                          <h2 class="blog_entry-title"> <a rel="bookmark" href="<?php echo $ayarlar["strURL"]; ?>/blog-detay/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a> </h2>
                        </div>
                        <!--blog_entry-header-inner--> 
                      </header>
                      <div> 
                        <p><?php echo $veri_listele["haber_kisaaciklama"]; ?> </p>
                      </div>
                      <p> <a class="btn" href="<?php echo $ayarlar["strURL"]; ?>/blog-detay/<?php echo $veri_listele["haber_seo"]; ?>"><i class="fa fa-plus-circle"></i> Devamını Oku</a> </p>
                    </div>
                    
                  </article>
				  
                 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
				 </div>
              </div>
              
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
       </div>
    </div>
  </div>
   
</div>  
<?php include("alt.php")?>
</body>
</html>