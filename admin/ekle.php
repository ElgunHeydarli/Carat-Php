<?php require_once 'header.php';
require_once 'sidebar.php';



 ?>
 <?php if($_GET['sayfa']=="servis"){ ?>
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Xidmətlərimiz</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil İcon</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Rəqəm</label>
                    <input name="rakam"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Başlıq</label>
                    <input name="baslik"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Açıqlama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                   
                     
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="serviskaydet" style="float:right" type="submit" class="btn btn-primary">Yadda saxla</button>
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
<?php } elseif ($_GET['sayfa']=="galeri") { ?>
<div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Portfolio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Başlıq</label>
                    <input name="baslik"  type="text" class="form-control" >
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Kategoriya</label>
                    <input name="kat"  type="text" class="form-control" >
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1"> Sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra giriniz.">
                  </div> 
                   
                    <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                           <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div> 
                   
                <div class="form-group">
                    <label for="exampleInputEmail1"> İl</label>
                    <input name="il"  type="text" class="form-control"  placeholder="Lütfen sıra giriniz.">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Şirkət adi</label>
                    <input name="compani"  type="text" class="form-control"  placeholder="Lütfen sıra giriniz.">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Ünvan</label>
                    <input name="unvan"  type="text" class="form-control"  placeholder="Lütfen sıra giriniz.">
                  </div> 

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="galerikaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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
<?php } elseif ($_GET['sayfa']=="blog") { ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog Başlık</label>
                    <input name="baslik"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog Sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Blog Anahtar Kelime</label>
                    <input name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Blog Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                   

                </div>
                <!-- /.card-body -->
 
                <div class="card-footer">
                  <button name="blogkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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
<?php } elseif ($_GET['sayfa']=="kategori") { ?>
<div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Ekip</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Başlık</label>
                    <input placeholder="Lütfen başlık giriniz." name="baslik"  type="text" class="form-control"  >
                  </div>
                 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Kategori sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra giriniz.">
                  </div> 
                 <div class="form-group">
                  <label>Kategori Durum</label>
                  <select name="durum" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Aktif</option>
                    <option value="2">Pasif</option>
                
                  </select>
                </div>
                

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="kategorikaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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
<?php } elseif ($_GET['sayfa']=="fikir") { ?>   ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Fikirlər</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ad soyad</label>
                    <input name="ad"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
  <div class="form-group">
                    <label for="exampleInputEmail1">Vəzifə</label>
                    <input name="vezife"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                 
                
                     <div class="form-group">
                    <label for="exampleInputEmail1">Aciklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                   

                </div>
                <!-- /.card-body -->
 
                <div class="card-footer">
                  <button name="fikirkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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