<?php require_once 'header.php';
require_once 'sidebar.php';
$fikirsor=$baglanti->prepare("SELECT * FROM fikir   order by fikir_sira ASC");
$fikirsor->execute(array());


 ?>



  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
       <?php
if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">İşlem başarılı</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">İşlem başarısız</p>

<?php }  ?>
          <div class="col-12">
            <div class="card">          
              <div class="card-header">
                <h3 class="card-title">Portfolio</h3>
                <a href="ekle.php?sayfa=fikir">
<button style="float:right" type="submit" class="btn btn-info">Yeni fikir əlavə et</button></a>
           <!-- 
     <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
           -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Şəkil</th>
                          <th>Ad Soyad</th>
                       <th>Vəzifə</th>
                   
                      <th> Sıra</th>
                    
                  
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                   	<?php 

while ($fikircek=$fikirsor->fetch(PDO::FETCH_ASSOC)) { ?>
         
                    <tr>
                      <td><img style="width:150px" src="resimler/fikir/<?php echo $fikircek['fikir_resim'] ?>"></td>
                       <td><?php echo $fikircek['fikir_ad'] ?></td>
                      <td><?php echo $fikircek['fikir_vezife'] ?></td>
                     
                        <td><?php echo $fikircek['fikir_sira'] ?></td>
                          
                
                         <td>
                           <form action="islem.php" method="post">
                          <button  name="fikirsil" type="submit" class="btn btn-danger">Sil</button>
                          <input name="id" value="<?php echo $fikircek['fikir_id'] ?>" type="hidden">
                           <input name="eskiresim" value="<?php echo $fikircek['fikir_resim'] ?>" type="hidden">
                           </form>


                        </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
 
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php require_once 'footer.php'; ?>