<?php require_once 'header.php';
require_once 'sidebar.php';
$elaqesor=$baglanti->prepare("SELECT * FROM elaqe   order by elaqe_sira ASC");
$elaqesor->execute(array());


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
                <h3 class="card-title">Mesajlar</h3>
                

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
                      <th>Ad Soyad</th>
                      
                       <th>Telefon</th>
                     
                      <th> Mesaj</th>
                    
                  
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                   	<?php 

while ($elaqecek=$elaqesor->fetch(PDO::FETCH_ASSOC)) { ?>
         
                    <tr>
                    <td><?php echo $elaqecek['elaqe_adsoyad'] ?></td>
                       <td><?php echo $elaqecek['elaqe_telefon'] ?></td>
                  
                           <td><?php echo $elaqecek['elaqe_text'] ?></td>
                
                         <td>
                           <form action="islem.php" method="post">
                          <button  name="elaqesil" type="submit" class="btn btn-danger">Sil</button>
                          <input name="id" value="<?php echo $elaqecek['elaqe_id'] ?>" type="hidden">
                          
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