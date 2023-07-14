<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Bayiler - Cecemed Saç Bakım Ürünleri </title>
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
				<li class="category1599"> <a href="#" title="">Bayiler</a> </li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Breadcrumbs End -->
	<h1 class="branding__title reset-font-weight">Bayiler</h1>
	</div>
  </div>
  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
 					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						 <?php
				$countActive = 1;
				$veri_cek = $db->query("SELECT * FROM bayiler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 9999999999");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>  
  
						
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headin<?php echo $veri_listele["haber_id"]; ?>">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $veri_listele["haber_id"]; ?>" aria-expanded="true" aria-controls="collapse<?php echo $veri_listele["haber_id"]; ?>">
										<?php echo $veri_listele["haber_baslik"]; ?>
									</a>
								</h4>
							</div>
							<div id="collapse<?php echo $veri_listele["haber_id"]; ?>" class="panel-collapse collapse  " role="tabpanel" aria-labelledby="heading<?php echo $veri_listele["haber_id"]; ?>">
								<div class="panel-body">
									<?php echo $veri_listele["haber_aciklama"]; ?>
								</div>
							</div>
						</div>
						
						<?php 
				 $countActive++;
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
 /*
Author       : Theme_ocean.
Template Name: Fury - Product Landing Page
Version      : 1.0
*/
(function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
			$('a.page-scroll').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});		

	}); 	

				
})(jQuery); 

</script>
<style>
.template_faq {
    background: #edf3fe none repeat scroll 0 0;
}
.panel-group {
    background: #fff none repeat scroll 0 0;
    border-radius: 3px;
    box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
    margin-bottom: 0;
    padding: 30px;
}
#accordion .panel {
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    margin: 0 0 15px 10px;
}
#accordion .panel-heading {
    border-radius: 30px;
    padding: 0;
}
#accordion .panel-title a {
    background: #0d98af none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 30px;
    color: #fff;
    display: block;
    font-size: 18px;
    font-weight: 600;
    padding: 12px 20px 12px 50px;
    position: relative;
    transition: all 0.3s ease 0s;
}

.panel-group .panel {
    margin-bottom: 0;    border-radius: 0px;    overflow: revert !important;
}


#accordion .panel-title a.collapsed {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    color: #333;
}
#accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
    background: #0d98af none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 50%;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
    color: #fff;
    content: "";
    font-family: fontawesome;
    font-size: 25px;
    height: 55px;
    left: -20px;
    line-height: 55px;
    position: absolute;
    text-align: center;
    top: -5px;
    transition: all 0.3s ease 0s;
    width: 55px;
}
#accordion .panel-title a.collapsed::after {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    box-shadow: none;
    color: #333;
    content: "";
}
#accordion .panel-body {
    background: transparent none repeat scroll 0 0;
    border-top: medium none;
    padding: 20px 25px 10px 9px;
    position: relative;
}
#accordion .panel-body p {
    border-left: 1px dashed #8c8c8c;
    padding-left: 25px;
}
</style>
</body>
</html>