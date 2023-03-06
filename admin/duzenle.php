<?php require_once 'header.php';
require_once 'sidebar.php';



 ?>
 <?php if($_GET['sayfa']=="servis"){


$servissor=$baglanti->prepare("SELECT * FROM services where servis_id=:servis_id");
$servissor->execute(array(
'servis_id'=>$_GET['id']
));
$serviscek=$servissor->fetch(PDO::FETCH_ASSOC);






  ?>
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Xidmətlərimiz düzəliş bölümü</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <img style="width:150px" src="resimler/servis/<?php echo $serviscek['servis_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Rəqəm</label>
                    <input value="<?php echo $serviscek['servis_rakam'] ?>" name="rakam"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Başlıq</label>
                    <input value="<?php echo $serviscek['servis_baslik'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">sıra</label>
                    <input value="<?php echo $serviscek['servis_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Açıqlama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $serviscek['servis_aciklama'] ?></textarea>
                  </div>
                   
                     
                </div>
                <!-- /.card-body -->
    <input type="hidden" name="eskiresim" value="<?php echo $serviscek['servis_resim'] ?>">
        <input type="hidden" name="id" value="<?php echo $serviscek['servis_id'] ?>">
                <div class="card-footer">
                  <button name="servisduzenle" style="float:right" type="submit" class="btn btn-primary">Yadda saxla</button>
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
<?php } elseif ($_GET['sayfa']=="galeri") {


$galerisor=$baglanti->prepare("SELECT * FROM galeri where galeri_id=:galeri_id");
$galerisor->execute(array(
'galeri_id'=>$_GET['id']
));
$galericek=$galerisor->fetch(PDO::FETCH_ASSOC);



 ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Portfolio düzəliş bölümü</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <img style="width:150px" src="resimler/galeri/<?php echo $galericek['galeri_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Sıra</label>
                    <input value="<?php echo $galericek['galeri_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Başlıq</label>
                    <input value="<?php echo $galericek['galeri_baslik'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Açıqlama</label>
  <textarea  name="aciklama" id="editor1" class="ckeditor"> <?php echo $galericek['galeri_aciklama'] ?></textarea>                  
  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Kategoriya adı</label>
                    <input value="<?php echo $galericek['galeri_kat'] ?>" name="kat"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">İl</label>
                    <input value="<?php echo $galericek['galeri_il'] ?>" name="il"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Şirkət adı</label>
                    <input value="<?php echo $galericek['galeri_compani'] ?>" name="compani"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Ünvan</label>
                    <input value="<?php echo $galericek['galeri_unvan'] ?>" name="unvan"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                  
                 
                  

                </div>
                <!-- /.card-body -->
    <input type="hidden" name="eskiresim" value="<?php echo $galericek['galeri_resim'] ?>">
        <input type="hidden" name="id" value="<?php echo $galericek['galeri_id'] ?>">
                <div class="card-footer">
                  <button name="galeriduzenle" style="float:right" type="submit" class="btn btn-primary">Yadda saxla</button>
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
<?php } elseif ($_GET['sayfa']=="blog") {

$blogsor=$baglanti->prepare("SELECT * FROM blog where blog_id=:blog_id");
$blogsor->execute(array(
'blog_id'=>$_GET['id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);




 ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Blog düzenle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog  Resim</label>
                    <img style="width:150px" src="resimler/blog/<?php echo $blogcek['blog_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog  Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog  Başlık</label>
                    <input value="<?php echo $blogcek['blog_baslik'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen başlık giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog  anahtar kelime</label>
                    <input value="<?php echo $blogcek['blog_anahtarkelime'] ?>" name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen anahtar kelime   giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Blog  sıra</label>
                    <input value="<?php echo $blogcek['blog_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $blogcek['blog_aciklama'] ?></textarea>
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->
    <input type="hidden" name="eskiresim" value="<?php echo $blogcek['blog_resim'] ?>">
        <input type="hidden" name="id" value="<?php echo $blogcek['blog_id'] ?>">
                <div class="card-footer">
                  <button name="blogduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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
<?php } elseif ($_GET['sayfa']=="kategori") {

$kategorisor=$baglanti->prepare("SELECT * FROM kategori where kategori_id=:kategori_id");
$kategorisor->execute(array(
'kategori_id'=>$_GET['id']
));
$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);





 ?>
<div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Kategori düzenle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
              
            
                   <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Başlık</label>
                    <input value="<?php echo $kategoricek['kategori_baslik'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen başlık  giriniz.">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">Kategori sıra</label>
                    <input value="<?php echo $kategoricek['kategori_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
              
                  
                        <div class="form-group">
                  <label>Kategori Durum</label>
                  <select name="durum" class="form-control select2" style="width: 100%;">
    <option value="1" <?php if ($kategoricek['kategori_durum']=="1") {
                      echo "selected";
                    } ?> >Aktif</option>
                    <option <?php if ($kategoricek['kategori_durum']=="2") {
                      echo "selected";
                    } ?> value="2">Pasif</option>
                
                  </select>
                </div>
                  

                </div>
                <!-- /.card-body -->

        <input type="hidden" name="id" value="<?php echo $kategoricek['kategori_id'] ?>">
                <div class="card-footer">
                  <button name="kategoriduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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