﻿<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Klinik Çalışma - Cecemed Saç Bakım Ürünleri </title>
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
				<li class="category1599"> <a href="#" title="">Klinik Çalışma</a> </li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Breadcrumbs End -->
	<h1 class="branding__title reset-font-weight">Klinik Çalışma</h1>
	</div>
  </div>
  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-sm-12 wow bounceInUp animated">
          <div class="col-main">
           
            <div class="static-contain"> 
            <iframe src="<?php echo $ayarlar["strURL"]; ?>/katalog/sayfa.php" style="border: 0; width: 100%; height: 550px;">Your browser doesn't support iFrames.</iframe>
               
            </div>
          </div>
        </section>
        </div>
    </div>
  </div> 
</div>  
<?php include("alt.php")?>
</body>
</html>