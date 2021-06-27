 <?php include 'header.php'; ?>
 <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
           <ol class="breadcrumb slim-breadcrumb">
          </ol>
          <h6 class="slim-pagetitle">İlaç Listesi</h6>
          
        </div><!-- slim-pageheader -->
  
        <div class="section-wrapper mg-t-20">
          
          <div class="table-responsive text-center">
<?php 
          if (isset($_GET['durum']) && $_GET['durum'] == "ok") {
          echo '<div class="alert alert-success mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>İşlem Başarılı!</strong> Bitki başarıyla düzenlendi.
          </div>';
        }

           ?>
            <table class="table table-bordered" >
              <thead class="thead-colored bg-primary">
                <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-15p">Bitki Adı</th>
                  <th class="wd-5p">Stok</th>
                  <th class="wd-5p">Birim Fiyat</th>
                  <th class="wd-5p">Mantar Periyodu</th>
                  <th class="wd-5p">Gübre Periyodu</th>
                  <th class="wd-5p">Böcek Periyodu</th>
                  <th class="wd-10p">Son Mantar İlacı</th>
                  <th class="wd-10p">Son Gübre İlacı</th>
                  <th class="wd-10p">Son Böcek İlacı</th>
                  <th class="wd-10p">İşlem</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $query = $db->query("SELECT * FROM bitki", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          echo '<tr>
                  <th scope="row">'.$row['id'].'</th>
                  <td><a href="bitkimaliyet.php?bitki='.$row['id'].'">'.$row['bitki_adi'].'</a></td>
                  <td>'.$row['bitki_adet'].'</td>
                  <td>'.$row['bitki_fiyat'].' ₺</td>
                  <td>'.$row['mantar_sure'].'</td>
                  <td>'.$row['gubre_sure'].'</td>
                  <td>'.$row['bocek_sure'].'</td>
                  <td>'.$row['son_mantar'].'</td>
                  <td>'.$row['son_gubre'].'</td>
                  <td>'.$row['son_bocek'].'</td>
                  <td><a href="bitkiduzenle.php?id='.$row['id'].'"><button class="btn btn-outline-primary btn-block mg-b-10">Düzenle</button></a></td>
                </tr>';
     }
}


                 ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div><!-- container -->
    </div><!-- slim-mainpanel -->

     <?php include 'footer.php'; ?>