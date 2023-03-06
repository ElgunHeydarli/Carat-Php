<?php require_once 'header.php'; ?>
    <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- Header Banner -->
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="img/banner.jpg">
            
            
        </section>


        
        <!-- Contact -->
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
         <p><b>Əlaqə nömrəsi :</b><br><?php echo $ayarcek['ayar_telefon'] ?></p>
        </div>
        <div class="box-face box-face--is-back">
       <p><b>Email :</b> <br><?php echo $ayarcek['ayar_email'] ?></p>
        </div>
        <div class="box-face box-face--is-top">&nbsp;</div>
        <div class="box-face box-face--is-bottom">&nbsp;</div>
        <div class="box-face box-face--is-left">
          <p style="color:black:"><b>Ünvan :</b><br> <?php echo $ayarcek['ayar_adres'] ?></p>
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
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.2715889956394!2d49.868490914894224!3d40.40283386440925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d4ee9253a65%3A0x29160f1a81905e71!2z0J3QsNGA0LjQvNCw0L0g0J3QsNGA0LjQvNCw0L3QvtCy!5e0!3m2!1sru!2s!4v1621281626565!5m2!1sru!2s"
             width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
   
        <?php require_once 'footer.php' ?>