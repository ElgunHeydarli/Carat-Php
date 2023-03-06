<?php require_once 'header.php';
require_once 'sidebar.php';

$ayarsor=$baglanti->prepare("SELECT * FROM ayarlar where ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

//SELECT LİSTELEMEK
//İNSERT YÜKLEMEK DEMEK
// DELETE SİLMEK DEMEK
//UPDATE GÜNCELLEME

 ?>
<?php if(@$_GET['sayfa']=="ayarlar"){ ?>
 
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">
 <?php
if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">Uğurlu oldu</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">Uğursuz</p>

<?php }  ?>
              <div class="card-header">
                <h3 class="card-title">Tənzimləmələr</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sayt başlığı (title)</label>
                    <input name="baslik" value="<?php echo $ayarcek['ayar_baslik'] ?>" type="text" class="form-control"  placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input name="aciklama" value="<?php echo  $ayarcek['ayar_aciklama'] ?>" type="text" class="form-control"  placeholder="Lütfen sitenizin açıklamasını giriniz.">
                  </div>
                       <div class="form-group">
                    <label for="exampleInputEmail1">Keyvords</label>
                    <input name="anahtar" value="<?php echo $ayarcek['ayar_anahtar'] ?>" type="text" class="form-control"  placeholder="Lütfen sitenizin anahtar kelimesini giriniz.">
                  </div>
                      <div class="form-group">
                    <label for="exampleInputEmail1"> Ünvan</label>
                    <input name="adres" value="<?php echo $ayarcek['ayar_adres'] ?>" type="text" class="form-control"  placeholder="Lütfen adresinizi giriniz.">
                  </div>
                        <div class="form-group">
                    <label for="exampleInputEmail1">Əlaqə nömrəsi</label>
                    <input name="telefon" value="<?php echo $ayarcek['ayar_telefon'] ?>" type="text" class="form-control"  placeholder="Lütfen telefon numaranızı giriniz.">
                  </div>
                        <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input name="email" value="<?php echo $ayarcek['ayar_email'] ?>" type="email" class="form-control"  placeholder="Lütfen email  adresinizi giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Əlaqə bölməsində başlıq mətn</label>
                    <input name="bir" value="<?php echo $ayarcek['ayar_elaqebaslik'] ?>" type="text" class="form-control"  placeholder="Lütfen telefon numaranızı giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Əlaqə bölməsində olan yazı</label>
                    <input name="iki" value="<?php echo $ayarcek['ayar_elaqeaciklama'] ?>" type="text" class="form-control"  placeholder="Lütfen telefon numaranızı giriniz.">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ayarkaydet" style="float:right" type="submit" class="btn btn-primary">Yadda saxla</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
 </div>
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php } elseif($_GET['sayfa']=="sosyalmedya"){ ?>



  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">
 <?php
if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">Uğurlu oldu</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">Uğursuz oldu</p>

<?php }  ?>
              <div class="card-header">
                <h3 class="card-title">Sosial media hesabları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input name="facebook" value="<?php echo $ayarcek['ayar_facebook'] ?>" type="text" class="form-control"  placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">İnstagram</label>
                    <input name="instagram" value="<?php echo  $ayarcek['ayar_instagram'] ?>" type="text" class="form-control"  placeholder="Lütfen sitenizin açıklamasını giriniz.">
                  </div>
                       <div class="form-group">
                    <label for="exampleInputEmail1">Youtube</label>
                    <input name="youtube" value="<?php echo $ayarcek['ayar_youtube'] ?>" type="text" class="form-control"  placeholder="Lütfen sitenizin anahtar kelimesini giriniz.">
                  </div>
                    
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sosyalmedyakaydet" style="float:right" type="submit" class="btn btn-primary">Yadda saxla</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
 </div>
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php } ?>
<?php require_once 'footer.php'; ?>