 <?php include 'header.php'; ?>
 <?php 
$query = $db->query("SELECT * FROM ilac", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          if ($row['ilac_adi'] == "Böcek") {
           $bocek = $row['ilac_miktar'];
          }elseif ($row['ilac_adi'] == "Mantar") {
            $mantar = $row['ilac_miktar'];
          }else{
             $gubre = $row['ilac_miktar'];
          }
     }
     $toplamilac = $bocek + $gubre + $mantar;
}

$bitkisayac = 0;
$query = $db->query("SELECT * FROM bitki", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
     	if ($row['son_mantar'] == "0000-00-00" || $row['son_gubre'] == "0000-00-00" || $row['son_bocek'] == "0000-00-00") {
     		$bitkisayac++;
     	}
          }
     }


 ?>

 <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
          </ol>
          <h6 class="slim-pagetitle">Ana Sayfa</h6>
        </div><!-- slim-pageheader -->
	<div class="report-summary-header">
          <div>
            <h4 class="tx-inverse mg-b-3">Güncel Stok Durumu</h4>
          </div>
        </div>
        <div class="row no-gutters dashboard-chart-one">
          <div class="col-md-12 col-lg-6">
            <div class="card card-total">
              <div>
                <h1><?php echo $toplamilac; ?></h1>
                <p>Toplam İlaçlar</p>
              </div>
              <div>
                
              <div class="pd-y-10"><div id="ilacgrafik" class="ht-200 ht-sm-250"></div></div>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-12 col-lg-6">
            <div class="card card-total">
              <div>
                <h1><?php echo $bitkisayac; ?></h1>
                <p>İlaçlama Bekleyen</p>
               <a href="bitkilistesi.php"><button class="btn btn-success btn-block mg-b-10">Listeyi Gör</button></a>
              </div>
              <div>
<div class="dropdown-activity-list">
                <div class="activity-label">Bugün <?php echo date('Y-m-d') ?></div>
                <?php 
                $query = $db->query("SELECT * FROM bildirimler", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          echo '<div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">UYARI</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">'.$row['uyari'].'</div>
                  </div><!-- row -->
                </div>';
     }
}

                 ?>
                <!-- activity-item -->
                <!-- activity-item -->
                <!-- activity-item -->
                <!-- activity-item -->
                
                <!-- activity-item -->
              </div>
              </div>
            </div><!-- card -->
          </div><!-- col -->
         <!-- col -->
        </div>
      </div><!-- container -->
    </div><!-- slim-mainpanel -->




     <?php include 'footer.php'; ?>