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
            <table class="table table-bordered" >
              <thead class="thead-colored bg-primary">
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-20p">İlaç Adı</th>
                  <th class="wd-20p">İlaçlanabilecek Toplam Bitki</th>
                  <th class="wd-10p">Miktar</th>
                  <th class="wd-10p">Maliyet</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $query = $db->query("SELECT * FROM ilac", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          echo '<tr>
                  <th scope="row">'.$row['id'].'</th>
                  <td>'.$row['ilac_adi'].'</td>
                  <td>'.$row['ilac_toplam'].'</td>
                  <td>'.$row['ilac_miktar'].'</td>
                  <td>'.$row['ilac_maliyet'].' ₺</td>
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