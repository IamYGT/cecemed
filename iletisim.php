<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>İletişim - Cecemed Saç Bakım Ürünleri </title>
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
				<li class="category1599"> <a href="#" title="">İletişim</a> </li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Breadcrumbs End -->
	<h1 class="branding__title reset-font-weight">İletişim</h1>
	</div>
  </div>
  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-sm-9 wow bounceInUp animated">
          <div class="col-main">
           
            <div class="static-contain">
            
            
            
              <fieldset class="group-select">
			  
			       <?php 
										if(isset($submit)){
											if(!empty($isim) ||  !empty($eposta) || !empty($telefon) || !empty($konu) ||  !empty($mesaj)){  

                                           /*          require 'include/PHPMailer/src/Exception.php';
                                                    require 'include/PHPMailer/src/PHPMailer.php';
                                                    require 'include/PHPMailer/src/SMTP.php'; */
                                                    require_once("include/phpmailer/class.phpmailer.php");
                                                    $mail = new PHPMailer(true); 
                                                    $mail->IsSMTP();
                                                    $mail->SMTPDebug = 0; 
                                                    $mail->SMTPAuth = true;
													$mail->SMTPSecure = "tls";
													$mail->Host = "smtp.yandex.com";
													$mail->Port = 587;
                                                    $mail->IsHTML(true);
                                                    $mail->SetLanguage("tr", "phpmailer/language");
                                                    $mail->CharSet ="utf-8";
                                                    $mail->Username = "info@ecce.com.tr"; //yandex mail adresi
                                                    $mail->Password = "srkuybahblvkxyip"; 
                                                    $mail->SetFrom("info@ecce.com.tr", "Cecemed İletişim Formundan Gelen Mesaj"); // Mail attığımızda yazacak isim
                                                    $mail->AddAddress("info@ecce.com.tr"); // Maili gondereceğimiz kişi/alıcı
                                                    $mail->Subject = "Cecemed İletişim Formundan Gelen Mesaj"; // Konu başlığı 
                                                    $mail->Body = '
                                                    <html>
                                                        <body>
                                                            <table class="made-in_text" border="0" cellSpacing="10" cellPadding="4" height="254" width="700">
																<tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Adı :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $isim . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Eposta :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $eposta . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Konu :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $konu . '</font></td>
                                                                </tr>  
																 	 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Telefon :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $telefon . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Mesaj :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $mesaj . '</font></td>
                                                                </tr>  
																  
                                                            </table>
                                                        </body>
                                                    </html>
                                                    '; // Mailin içeriği
                                               
												if($mail->send()){
													$error = array(
														'type'	=>	'success',
														'title'	=>	'Başarılı!',
														'text'	=>	'Başvurunuz başarılı şekilde gönderildi, anasayfaya dönmek için <a class="alert-link" href="/">buraya tıklayın</a>..'
													);
												} else {
													$error = array(
														'type'	=>	'danger',
													'title'	=>	'Hata!',
													'text'	=>	'Boş alan bıraktınız, geri dönmek için <a class="alert-link" onclick="javascript:history.go(-1); return false;" href="#">buraya tıklayın</a>..'
													);
												}
											} else {
												$error = array(
													'type'	=>	'danger',
													'title'	=>	'Hata!',
													'text'	=>	'Boş alan bıraktınız, geri dönmek için <a class="alert-link" onclick="javascript:history.go(-1); return false;" href="#">buraya tıklayın</a>..'
												);
											}
										} 
?>

									
									<?php  
			if(isset($error)) {
?>
					<div class="row">
						<div class="col-lg-12" style="margin-bottom:30px;">
							<div class="alert alert-<?php echo $error["type"]; ?> solid">
								<strong><?php echo $error["title"]; ?></strong>
								<p><?php echo $error["text"]; ?></p>
							</div>
						</div>
					</div>
<?php
			}
?>
<form  class="fcf-form-class" action="#" method="POST" >


                 <ul>
                  <li>
                     <div class="input-box name-firstname">
                        <label for="Name"> İsminiz<span class="required">*</span></label>
                        <br>
                        <input type="text"   name="isim" class="fcf-form-control input-text " required="">
                      </div>
                      </li>
                  <li>
                     <div class="input-box name-firstname">
                        <label for="phone"> Telefon<span class="required">*</span></label>
                        <br>
                        <input type="text"   name="telefon" class="fcf-form-control input-text " required="">
                      </div>
                      </li>
                  <li>
                     <div class="input-box name-firstname">
                        <label for="subject"> Konu </label>
                        <br>
                        <input type="text"   name="konu" class="fcf-form-control input-text " required="">
                      </div>
                      </li>
                      <li>
                      <div class="input-box name-lastname">
                        <label for="Email">Eposta Adresiniz <span class="required">*</span> </label>
                        <br>
                        <input type="email"  name="eposta" class="fcf-form-control input-text " required="">
                      </div>
                  
                  </li>
                  
                  
                  <li class="">
                    <label for="Message">Mesajınız<em class="required">*</em></label>
                    <br>
                    <div style="float:none" class="">
                       <textarea  name="mesaj" class="fcf-form-control" rows="6" maxlength="3000" required=""></textarea>
                    </div>
                  </li>
                </ul>
                
                <div class="buttons-set">
                 <button type="submit"  name="submit" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block button submit">Gönder</button>
                </div>
                </form>
              </fieldset>
              
              
              
              
            </div>
          </div>
        </section>
        <aside class="col-right sidebar col-sm-3 wow bounceInUp animated">
          <div class="block block-company">
            <div class="block-title">İletişim Bilgileri </div>
            <div class="block-content">
              <ol id="recently-viewed-items">
			                  <li class="item even"><a href="#"><?php echo $ayarlar["strAddress"]; ?></a></li>
                <li class="item odd"><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?></a></li>
                <li class="item  odd"><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a></li>
                <li class="item  odd"><a href="<?php echo $ayarlar["strURL"]; ?>"><?php echo $ayarlar["strURL"]; ?></a></li>
               </ol>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <!--End main-container --> 
  
</div>
<!--End feature--> 




<!-- our features -->
  <div  style="    padding: 0;" class="our-features-box">
    <div style="    padding: 0; margin: 0;"  class="container-fluid">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d385016.9592060421!2d28.997185000000005!3d41.070195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab6fc31438dab%3A0x902779555bdf0d2b!2zS3XFn3RlcGUsIE1lY2lkaXlla8O2eSBZb2x1IENkLiBObzoxMiwgMzQzODcgxZ5pxZ9saS_EsHN0YW5idWwsIFTDvHJraXll!5e0!3m2!1str!2sus!4v1635439988281!5m2!1str!2sus"  style="border:0; width:100%; height:450px;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
 
    <?php include("alt.php")?>
</body>
</html>