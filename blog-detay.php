<?php require_once 'header.php';
$blogsor=$baglanti->prepare("SELECT * FROM blog where blog_id=:blog_id");
$blogsor->execute(array(
'blog_id'=>$_GET['blog_id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);

 
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
                    <div class="col-md-12"> <img src="admin/resimler/blog/<?php echo $blogcek['blog_resim'] ?>" class="mb-30" alt="">
                        <h2 class="section-title2"><?php echo $blogcek['blog_baslik'] ?></h2>
                        <p><?php echo $blogcek ['blog_aciklama'] ?></p>
                      
                    </div>
                </div>
             
            </div>
        </section>
    <?php require_once 'footer.php'; ?>







    