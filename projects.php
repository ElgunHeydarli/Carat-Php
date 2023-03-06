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
        <section class="banner-header banner-img bg-img bg-fixed pb-0" data-background="img/banner.jpg" data-overlay-darkgray="5">
            
            
        </section>
        <!-- Projects -->
        <section class="projects section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title"> <span>Portfolio</span></h2>
                    </div>
                </div>
                <div class="row">



<?php 

      $galerisor=$baglanti->prepare("SELECT * FROM galeri order by galeri_sira ASC limit 50 ");
$galerisor->execute(array());

while ($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) {  ?>

                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/projects/1.jpg" alt=""> </div>
                            <div class="con">
                               <h6><a href="portfolio-page-<?=seo($galericek['galeri_baslik']).'-'.$galericek['galeri_id'] ?>"><?php echo $galericek['galeri_kat'] ?></a></h6>
                                    <h5><a href="portfolio-page-<?=seo($galericek['galeri_baslik']).'-'.$galericek['galeri_id'] ?>"><?php echo $galericek['galeri_baslik'] ?></a></h5>
                                    <div class="line"></div> <a href="portfolio-page-<?=seo($galericek['galeri_baslik']).'-'.$galericek['galeri_id'] ?>"><i class="ti-arrow-right"></i></a>
                                </div>
                        </div>
                    </div>




<?php } ?>














              
                </div>
            </div>
        </section>
       
  <?php require_once 'footer.php'; ?>