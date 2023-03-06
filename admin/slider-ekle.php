<?php include 'header.php';

require_once 'sidebar.php';










?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content">
    <div class="container-fluid">

      <div class="row">





        <div class="card card-primary col-md-12">
          <div class="card-header">
            <h3 class="card-title">Sliderlər </h3>         </div> <?php 

            if (@$_GET['yuklenme']=="basarili") { ?>
              <h6 style="color:green">(Uğurlu oldu)</h6>
            <?php }

            elseif(@$_GET['yuklenme']=="basarisiz"){ ?>
              <h6 style="color:red">(Yükleme işlemi başarısız)</h6><?php }
              elseif(@$_GET['yuklenme']=="kullanicivar"){ ?>
                <h6 style="color:red">(Bu kullanıcı kayıtlı)</h6>


              <?php }   ?>

              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="POST" enctype="multipart/form-data" >
                <div class="card-body">

  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <input  name="slideresim" type="file" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlıq</label>
                    <input  name="sliderbaslik" type="text" class="form-control"  placeholder="Lütfen  kullanıcı adını giriniz.">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Açıqlama</label>
                    <input  name="slideraciklama" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sıra</label>
                    <input  name="slidersira" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
             
             
             
               
                  
  
                
                  <div class="card-footer">
                    <button name="sliderkaydet" type="submit" class="btn btn-primary">Yadda saxla</button>
                  </div>
                </form>
              </div>











              <!-- right col -->
            </div>
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php require_once 'footer.php'; ?>