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
                            <div class="about-img-2 about-buro"><?php echo $hakkimizdacek['hakkimizda_yazi'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team -->
     
   <?php require_once 'footer.php' ?>