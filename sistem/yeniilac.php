 <?php include 'header.php'; ?>
 <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
          </ol>
          <h6 class="slim-pagetitle">Ana Sayfa</h6>
        </div><!-- slim-pageheader -->
	
        <div class="section-wrapper mg-t-20">
          <?php 
          if (isset($_GET['durum']) && $_GET['durum'] == "ok") {
          echo '<div class="alert alert-success mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>İşlem Başarılı!</strong> İlaç başarıyla eklendi.
          </div>';
        }
         ?>
			 <form action="" method="POST" data-parsley-validate>
            <label class="section-title">İlaç Türü</label>
            <div id="cbWrapper" class="parsley-checkbox">
              <label class="rdiobox">
                <input type="radio" name="ilac[]" value="1" data-parsley-mincheck="2" data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" required><span>Böcek</span>
              </label>
              <label class="rdiobox">
                <input type="radio" name="ilac[]" value="2"><span>Gübre</span>
              </label>
              <label class="rdiobox">
                <input type="radio" name="ilac[]" value="3"><span>Mantar</span>
              </label>
            </div>
            <label class="section-title">Adet</label>
            <input type="number" name="ilac[]" placeholder="0" value="0" required>
            <label class="section-title">Maliyet (Adet başına ₺)</label>
            <input type="number" name="ilac[]" placeholder="0.00" step="0.01" required>
            <!-- form-group -->
            <div id="cbErrorContainer"></div>
            <div class="mg-t-20">
              <button type="submit" class="btn btn-primary pd-x-20" value="5">Gönder</button>
            </div>
          </form>

          <?php 
          

          if (isset($_POST['ilac'])) {
			$query = $db->query("SELECT * FROM ilac WHERE id = '{$_POST['ilac'][0]}'")->fetch(PDO::FETCH_ASSOC);
			if ( $query ){
			    $mevcut = $query['ilac_miktar'];
			    $mevcut += $_POST['ilac'][1];

			    $toplam = $query['ilaclama']*$mevcut;
			    

			 $query2 = $db->prepare("UPDATE ilac SET
			ilac_miktar=:ilac_miktar,
			ilac_maliyet=:ilac_maliyet,
			ilac_toplam=:ilac_toplam

			WHERE id = :id");
			$update = $query2->execute(array(
			     "id" => $_POST['ilac'][0],
			     "ilac_miktar" => $mevcut,
			     "ilac_maliyet" => $_POST['ilac'][2],
			     "ilac_toplam"	=> $toplam
			));
			if ( $update ){
			     header('Location: yeniilac.php?durum=ok');
			}
			}




          
          }





          ?>
          
        </div>
      </div><!-- container -->
    </div><!-- slim-mainpanel -->

     <?php include 'footer.php'; ?>