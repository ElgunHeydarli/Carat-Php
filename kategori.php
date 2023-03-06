

<?php require_once 'header.php';

      $iceriksor=$baglanti->prepare("SELECT * FROM icerik where kategori_id=:kategori_id order by icerik_sira ASC ");
$iceriksor->execute(array(
'kategori_id'=>$_GET['kategori_id']
));

# kategori sayfasını içerik sayfası olarak kullandık
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
        <!-- Post -->

        <section class="pb-90">
            <div class="container">
                <div class="row">

<?php while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {  ?>

                    <div class="col-md-12"> <img src="admin/resimler/icerik/<?php echo $icerikcek['icerik_resim'] ?>" class="mb-30" alt="">
                        <h2 class="section-title2"><?php echo $icerikcek['icerik_baslik'] ?></h2>
                        <p><?php echo $icerikcek ['icerik_aciklama'] ?></p>
                      
                    </div>


<?php } ?>

                </div>
             
            </div>
        </section>
    <?php require_once 'footer.php'; ?>