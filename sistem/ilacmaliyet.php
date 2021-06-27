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
        </div><!-- slim-pageheader -->
	<div class="report-summary-header">
          <div>
            <h4 class="tx-inverse mg-b-3">Aylık İlaçlama Maliyetleri</h4>
          </div>
        </div>
        <div class="row no-gutters dashboard-chart-one">
          <div class="col-md-12 col-lg-12">
            <div class="card card-total">
              <p class="mg-b-20 mg-sm-b-40">Aylara göre kullanım miktarı.</p>
              <div>
                
             <div class="row">
            <div class="col-xl-12">
              <div id="morrisBar3" class="ht-200 ht-sm-300 bd"></div>
            </div><!-- col-6 -->
          </div>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-12 col-lg-12">
            <div class="card card-total">
              <p class="mg-b-20 mg-sm-b-40">Aylara göre ilaçlama maliyetleri ₺.</p>
              <div>
                
             <div class="row">
            <div class="col-xl-12">
              <div id="morrisBar4" class="ht-200 ht-sm-300 bd"></div>
            </div><!-- col-6 -->
          </div>
              </div>
            </div><!-- card -->
          </div>
          <!-- col -->
         <!-- col -->
        </div>
        <div class="pagination-wrapper">
            <nav aria-label="Page navigation">
              <ul class="pagination mg-b-0">
                <li class="page-item"><a class="page-link" href="?yil=2017">2017</a></li>
                <li class="page-item active"><a class="page-link" href="?yil=2018">2018</a></li>
                <li class="page-item"><a class="page-link" href="?yil=2019">2019</a></li>
              </ul>
            </nav>
          </div>
      </div><!-- container -->
    </div><!-- slim-mainpanel -->


<?php

if (isset($_GET['yil'])) {
  $yil = $_GET['yil'];
}else{
  $yil = date("Y");
}

include 'maliyettanim.php';


$query = $db->query("SELECT * FROM tuketim WHERE yil = '{$yil}'", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
      $ay = $row['ay'];
          if ($ay == "1") {
            if ($row['ilac_id'] == "3") {
            $ocak_mantar1 += $row['ilac_miktar'];
            $ocak_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $ocak_gubre1  += $row['ilac_miktar'];
            $ocak_gubre2  += $row['maliyet'];
            }else{
            $ocak_bocek1  +=  $row['ilac_miktar'];
            $ocak_bocek2  +=  $row['maliyet'];
            }
            
            
            
          }elseif ($ay == "2") {
        if ($row['ilac_id'] == "3") {
            $subat_mantar1 += $row['ilac_miktar'];
            $subat_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $subat_gubre1  += $row['ilac_miktar'];
            $subat_gubre2  += $row['maliyet'];
            }else{
            $subat_bocek1  +=  $row['ilac_miktar'];
            $subat_bocek2  +=  $row['maliyet'];
            }
          }elseif ($ay == "3") {
            if ($row['ilac_id'] == "3") {
            $mart_mantar1 += $row['ilac_miktar'];
            $mart_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $mart_gubre1  += $row['ilac_miktar'];
            $mart_gubre2  += $row['maliyet'];
            }else{
            $mart_bocek1  +=  $row['ilac_miktar'];
            $mart_bocek2  +=  $row['maliyet'];
            }
          }elseif ($ay == "4") {
           if ($row['ilac_id'] == "3") {
            $nisan_mantar1 += $row['ilac_miktar'];
            $nisan_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $nisan_gubre1  += $row['ilac_miktar'];
            $nisan_gubre2  += $row['maliyet'];
            }else{
            $nisan_bocek1  +=  $row['ilac_miktar'];
            $nisan_bocek2  +=  $row['maliyet'];
            }
          }elseif ($ay == "5") {
           if ($row['ilac_id'] == "3") {
            $mayis_mantar1 += $row['ilac_miktar'];
            $mayis_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $mayis_gubre1  += $row['ilac_miktar'];
            $mayis_gubre2  += $row['maliyet'];
            }else{
            $mayis_bocek1  +=  $row['ilac_miktar'];
            $mayis_bocek2  +=  $row['maliyet'];
            }
          }elseif ($ay == "6") {
            if ($row['ilac_id'] == "3") {
            $haziran_mantar1 += $row['ilac_miktar'];
            $haziran_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $haziran_gubre1  += $row['ilac_miktar'];
            $haziran_gubre2  += $row['maliyet'];
            }else{
            $haziran_bocek1  +=  $row['ilac_miktar'];
            $haziran_bocek2  +=  $row['maliyet'];
            }
          }elseif ($ay == "7"){
           if ($row['ilac_id'] == "3") {
            $temmuz_mantar1 += $row['ilac_miktar'];
            $temmuz_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $temmuz_gubre1  += $row['ilac_miktar'];
            $temmuz_gubre2  += $row['maliyet'];
            }else{
            $temmuz_bocek1  +=  $row['ilac_miktar'];
            $temmuz_bocek2  +=  $row['maliyet'];
            }
          }elseif ($ay == "8") {
           if ($row['ilac_id'] == "3") {
            $agustos_mantar1 += $row['ilac_miktar'];
            $agustos_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $agustos_gubre1  += $row['ilac_miktar'];
            $agustos_gubre2  += $row['maliyet'];
            }else{
            $agustos_bocek1  +=  $row['ilac_miktar'];
            $agustos_bocek2  +=  $row['maliyet'];
            }
          }elseif ($ay == "9") {
           if ($row['ilac_id'] == "3") {
            $eylul_mantar1 += $row['ilac_miktar'];
            $eylul_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $eylul_gubre1  += $row['ilac_miktar'];
            $eylul_gubre2  += $row['maliyet'];
            }else{
            $eylul_bocek1  +=  $row['ilac_miktar'];
            $eylul_bocek2  +=  $row['maliyet'];
            }
          }elseif ($ay == "10") {
            if ($row['ilac_id'] == "3") {
            $ekim_mantar1 += $row['ilac_miktar'];
            $ekim_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $ekim_gubre1  += $row['ilac_miktar'];
            $ekim_gubre2  += $row['maliyet'];
            }else{
            $ekim_bocek1  +=  $row['ilac_miktar'];
            $ekim_bocek2  +=  $row['maliyet'];
            }
          }elseif ($ay == "11") {
            if ($row['ilac_id'] == "3") {
            $kasim_mantar1 += $row['ilac_miktar'];
            $kasim_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $kasim_gubre1  += $row['ilac_miktar'];
            $kasim_gubre2  += $row['maliyet'];
            }else{
            $kasim_bocek1  +=  $row['ilac_miktar'];
            $kasim_bocek2  +=  $row['maliyet'];
            }
          }else{
           if ($row['ilac_id'] == "3") {
            $aralik_mantar1 += $row['ilac_miktar'];
            $aralik_mantar2 += $row['maliyet'];
            }elseif ($row['ilac_id'] == "2") {
            $aralik_gubre1  += $row['ilac_miktar'];
            $aralik_gubre2  += $row['maliyet'];
            }else{
            $aralik_bocek1  +=  $row['ilac_miktar'];
            $aralik_bocek2  +=  $row['maliyet'];
            }
          }
     }
}


 ?>


     <?php include 'footer.php'; ?>