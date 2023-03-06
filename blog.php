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
        <!-- Blog  -->
        <section class="bauen-blog section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title"> <span>Xəbərlər</span></h2>
                    </div>
                </div>
                <div class="row">
                    







<?php 
      $blogsor=$baglanti->prepare("SELECT * FROM blog order by blog_sira ASC ");
$blogsor->execute(array());

while ($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {
?>






                    <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="admin/resimler/blog/<?php echo $blogcek['blog_resim'] ?>" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="blog-detay-<?=seo($blogcek['blog_baslik']).'-'.$blogcek['blog_id'] ?>">Tarix</a> - <?php echo $blogcek['blog_zaman'] ?>
                                </span>
                                <h5><a href="blog-detay-<?=seo($blogcek['blog_baslik']).'-'.$blogcek['blog_id'] ?>"><?php echo $blogcek['blog_baslik'] ?></a></h5>
                            </div>
                        </div>
                    </div>


<?php } ?>








                </div>
               
            </div>
        </section>
     <?php require_once 'footer.php' ?>