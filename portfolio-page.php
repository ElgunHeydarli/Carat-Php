<?php require_once 'header.php';
$galerisor=$baglanti->prepare("SELECT * FROM galeri where galeri_id=:galeri_id");
$galerisor->execute(array(
'galeri_id'=>$_GET['galeri_id']
));
$galericek=$galerisor->fetch(PDO::FETCH_ASSOC);

 
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
        <!-- Project Page -->
        <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title2"><?php echo $galericek['galeri_baslik'] ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p><?php echo $galericek['galeri_aciklama'] ?></p>
                
                    </div>
                    <div class="col-md-4">
                        <p><b>İı : </b> <?php echo $galericek['galeri_il'] ?></p>
                        <p><b>Company : </b> <?php echo $galericek['galeri_compani'] ?></p>
                       
                        <p><b>Ünvan : </b><?php echo $galericek['galeri_unvan'] ?></p>
                    </div>
                </div>
                <div class="row mt-30">








<?php  
                    $cokluresim=$baglanti->prepare("SELECT * FROM  cokluresim where galeri_id=:galeri_id order by id ASC");
                    $cokluresim->execute(array(

                  'galeri_id'=>$_GET['galeri_id']
                    ));
                    while ($cokluresimcek=$cokluresim->fetch(PDO::FETCH_ASSOC)) { ?>




                    <div class="col-md-6 gallery-item">
                        <a href="admin/resimler/cokluresim/<?php echo $cokluresimcek['resim'] ?>" title="Architecture" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="admin/resimler/cokluresim/<?php echo $cokluresimcek['resim'] ?>" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                 



<?php } ?>












                </div>
            </div>
        </section>
  
      <?php require_once 'footer.php'; ?>