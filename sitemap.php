<?php  include("include/baglan.php");  include("include/fonksiyon.php");  ?>
<?php header('Content-type: Application/xml; charset="utf8"', true); ?>
		<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
				xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
				xmlns:xhtml="http://www.w3.org/1999/xhtml"
				xsi:schemaLocation="
					http://www.sitemaps.org/schemas/sitemap/0.9
					http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
			
			<url>
				<loc><?php echo $ayarlar["strURL"]; ?></loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
				
			<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/hakkimizda</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/urunlerimiz</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/klinik-calisma</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/bayiler</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
			
				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/blog</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
			
				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/iletisim</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
		 
 
		 
<?php 
		//Markalar
		$list = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 ORDER BY haber_tarih ASC");
		foreach($list as $row){  	 
			$strURL = $ayarlar["strURL"].'/haber-detay/'.$row["haber_seo"]; 
?>
			<url>
				<loc><?php echo $strURL ?></loc>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<changefreq>always</changefreq>
				<priority>1.00</priority>
			</url>
<?php 
			} 
?> 
 
		 
<?php 
		//Markalar
		$list = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 ORDER BY proje_tarih ASC");
		foreach($list as $row){  	 
			$strURL = $ayarlar["strURL"].'/urun/'.$row["proje_seo"]; 
?>
			<url>
				<loc><?php echo $strURL ?></loc>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<changefreq>always</changefreq>
				<priority>1.00</priority>
			</url>
<?php 
			} 
?> 
 
			 
		 
<?php 
		//Markalar
		 $list = $db->query("SELECT * FROM kategoriler WHERE altkategori_id='0' AND dil_id='tr'"); 
		$list = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND altkategori_id = '".$row["kategori_ust_id"]."' AND dil_id='tr'");
		foreach($list as $row){  	 
			$strURL = $ayarlar["strURL"]."/".$row["kategori_seo"]."/".$row["kategori_seo"]."-c-".$row["kategori_ust_id"]; ?>
			<url>
				<loc><?php echo $strURL ?></loc>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<changefreq>always</changefreq>
				<priority>1.00</priority>
			</url>
<?php 
			} 
?> 
 
			 
 
 

		</urlset>