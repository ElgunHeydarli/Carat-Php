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
        <!-- Testimonials -->
        <section class="testimonials section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title"> <span>Müştəri fikirləri</span></h2>
                    </div>
                </div>
                <div class="row">






<?php       $fikirsor=$baglanti->prepare("SELECT * FROM fikir order by fikir_sira ASC ");
$fikirsor->execute(array()); ?>




	<?php while ($fikircek=$fikirsor->fetch(PDO::FETCH_ASSOC)) {  ?>


                    <div class="col-md-4">
                          <div class="item testimonials-box" style="background: #323232"> 
                                <span class="quote"><img src="img/quot.png" alt=""></span>
                                <p><?php echo $fikircek['fikir_aciklama'] ?></p>
                                <div class="info">
                                    <div class="author-img"> <img src="admin/resimler/fikir/<?php echo $fikircek ['fikir_resim'] ?>" alt=""> </div>
                                    <div class="cont">
                                        <h6><?php echo $fikircek['fikir_ad'] ?></h6> <span><?php echo $fikircek['fikir_vezife'] ?></span>
                                    </div>
                                </div>
                            </div>
                    </div>
                 


<?php } ?>











                </div>
            </div>
        </section>
       <?php require_once 'footer.php'; ?>