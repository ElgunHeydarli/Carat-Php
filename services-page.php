<?php require_once 'header.php';
$servissor=$baglanti->prepare("SELECT * FROM services where servis_id=:servis_id");
$servissor->execute(array(
'servis_id'=>$_GET['servis_id']
));
$serviscek=$servissor->fetch(PDO::FETCH_ASSOC);

 
 ?>
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
        <!-- Services Page -->
        <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title2"><?php echo $serviscek['servis_baslik'] ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><?php echo $serviscek['servis_aciklama'] ?></p>
                  
                        <div class="row mb-30">
                          
                            <div class="col-md-12 gallery-item">
                                <a href="admin/resimler/servis/<?php echo $serviscek['servis_resim'] ?>" title="Architecture" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="admin/resimler/servis/<?php echo $serviscek['servis_resim'] ?>" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </section>
  <?php require_once 'footer.php'; ?>