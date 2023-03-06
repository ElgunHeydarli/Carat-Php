<?php require_once 'header.php'; ?>
    <!-- Slider -->
   <?php require_once 'slider.php'; ?>



   




    <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- About -->
        <section class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title"><?php echo $hakkimizdacek['hakkimizda_baslik'] ?></span></h2>
                        <p><?php echo $hakkimizdacek['hakkimizda_aciklama'] ?></p>
                    
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="about-img">
                            <div class="img"> <img src="admin/resimler/hakkimizda/<?php echo $hakkimizdacek['hakkimizda_resim'] ?>" class="img-fluid" alt=""> </div>
                            <div class="about-img-2 about-buro">Caratcons.az</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects -->
       
        <!-- Services -->
        <section class="services section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title"> <span>Xidmətlərimiz</span></h2>
                    </div>
                </div>
                <div class="row">










<?php   

$servissor=$baglanti->prepare("SELECT * FROM services   order by servis_sira ASC limit 6");
$servissor->execute(array());

while ($serviscek=$servissor->fetch(PDO::FETCH_ASSOC)) { ?>







                    <div class="col-md-4">
                        <div class="item">
                            <a href="services-page-<?=seo($serviscek['servis_baslik']).'-'.$serviscek['servis_id'] ?>"> 
                                <h5><?php echo $serviscek['servis_baslik'] ?></h5>
                                <div class="line"></div>
 <p><?php 
                     $aciklama=$serviscek['servis_aciklama'];
                     $bolaciklama=substr($aciklama, 0,200);

                       echo $bolaciklama;
                 ?></p>                                <div class="numb"><?php echo $serviscek['servis_rakam'] ?></div>
                            </a>
                        </div>
                    </div>
                   




<?php } ?>
















                </div>
            </div>
        </section>
        <!-- Blog -->
        <section class="bauen-blog section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title"> <span>Xəbərlər</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                         





<?php 
      $blogsor=$baglanti->prepare("SELECT * FROM blog order by blog_sira ASC ");
$blogsor->execute(array());

while ($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {
?>



                            <div class="item">
                                <div class="position-re o-hidden"> <img src="admin/resimler/blog/<?php echo $blogcek['blog_resim'] ?>" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="blog-detay-<?=seo($blogcek['blog_baslik']).'-'.$blogcek['blog_id'] ?>">Tarix</a> -<?php echo $blogcek['blog_zaman'] ?>
                                    </span>
                                    <h5><a href="blog-detay-<?=seo($blogcek['blog_baslik']).'-'.$blogcek['blog_id'] ?>"><?php echo $blogcek['blog_baslik'] ?></a></h5>
                                </div>
                            </div>
                   




<?php } ?>








                        </div>
                    </div>
                </div>
            </div>
        </section>








    <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title"> <span>Bizimlə əlaqə</span></h2>
                    </div>
                </div>
                <div class="row mb-90">
                    <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <p><b><?php echo $ayarcek['ayar_elaqebaslik'] ?></b></p>
                        <p><?php echo $ayarcek['ayar_elaqeaciklama'] ?></p>
                       <!-- JJ -->
<div class="page">
  <div class="container">
    <div class="shadow-wrapper">
      <div class="shadow">
        <div>&nbsp;</div>
      </div>
    </div>
    <div class="box-wrapper">
      <div class="box-faces">
        <div class="box-face box-face--is-front">
         <p><b style="color:black;">Əlaqə nömrəsi :</b><br><?php echo $ayarcek['ayar_telefon'] ?></p>
        </div>
        <div class="box-face box-face--is-back">
       <p><b style="color:black;">Email :</b> <br><?php echo $ayarcek['ayar_email'] ?></p>
        </div>
        <div class="box-face box-face--is-top">&nbsp;</div>
        <div class="box-face box-face--is-bottom">&nbsp;</div>
        <div class="box-face box-face--is-left">
          <p style="color:black:"><b style="color:black;">Ünvan :</b><br> <?php echo $ayarcek['ayar_adres'] ?></p>
        </div>
        <div class="box-face box-face--is-right">
          <p>
           CARAT CONS MMC
          </p>
        </div>

      </div><!-- end of .box -->
    </div><!-- end of .box-wrapper -->
  </div><!-- /.container -->
</div><!-- /.page -->
<!-- SDG -->
                    </div>
                    <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <p><b>Əlaqə məlumatlarımız</b></p>
                        <p><b>Əlaqə nömrəsi :</b><?php echo $ayarcek['ayar_telefon'] ?></p>
                        <p><b>Email :</b> <?php echo $ayarcek['ayar_email'] ?></p>
                        <p><b>Ünvan :</b> <?php echo $ayarcek['ayar_adres'] ?></p>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <p><b>Bizə yazın</b></p>
                      <form method="post"  action="admin/islem.php" class="row">
                            <div class="col-md-12">
                                <input type="text" name="isim"  placeholder="Adınız və Soyadınız">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="eposta"  placeholder="Əlaqə nömrəsi" >
                            </div>
                            <div class="col-md-12">
                                <textarea name="mesaj" cols="40" rows="4" placeholder="Mesajınız"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button name="elaqe" class="butn-dark mt-15"><a href="#"><span>Göndər</span></a></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Map Section-->
            </div>

            
        </section>







      <?php require_once 'footer.php'; ?>