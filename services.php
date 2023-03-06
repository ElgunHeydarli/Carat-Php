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
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="img/banner.jpg"></section>
        <!-- Services -->
        <section class="services section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
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
<!-- Footer -->
<?php require_once 'footer.php'; ?>