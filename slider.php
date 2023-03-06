 <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
           
           
           
           
           
           
           
           
           
           
           
           
           
             <?php  
                    $slider=$baglanti->prepare("SELECT * FROM  slider  order by slider_sira ASC");
                    $slider->execute(array(

             
                    ));
                    while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>
           
           
           
            <div class="text-left item bg-img" style="background-image: url(admin/resimler/slider/<?php echo $slidercek['slider_resim'] ?>) !important;">
                <div class="v-bottom caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="o-hidden">
                                    <h1><?php echo $slidercek['slider_baslik'] ?></h1>
                                    <hr>
                                    <p><?php echo $slidercek['slider_aciklama'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          




<?php } ?>














        </div>
    </header>