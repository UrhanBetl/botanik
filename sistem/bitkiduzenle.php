 <?php include 'header.php'; ?>
 <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
          </ol>
          <h6 class="slim-pagetitle">Ana Sayfa</h6>
        </div><!-- slim-pageheader -->
	<?php 
$id = $_GET['id']; 
$query = $db->query("SELECT * FROM bitki WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
if ( $query ){
   
}

   ?>
        <div class="section-wrapper mg-t-20">
          
			 <form action="func.php" method="POST" data-parsley-validate>
            <label class="section-title">Bitki Adı</label>
            <input type="text" name="bitki[]" value="<?php echo $query['bitki_adi'] ?>" required>
            <label class="section-title">Stok Ekle / Çıkar  </label><span> (Mevcut = <?php echo $query['bitki_adet'] ?>) </span> <br>
            <input type="number" name="bitki[]" placeholder="0" value="0" required>
            <label class="section-title">Birim Fiyat</label>
            <input type="number" name="bitki[]" value="<?php echo $query['bitki_fiyat'] ?>" step="0.01" required>
            <label class="section-title">Mantar İlacı Periyodu</label>
            <input type="number" name="bitki[]" value="<?php echo $query['mantar_sure']; ?>" required>
            <label class="section-title">Gübre İlacı Periyodu</label>
            <input type="number" name="bitki[]" value="<?php echo $query['gubre_sure']; ?>" required>
            <label class="section-title">Böcek İlacı Periyodu</label>
            <input type="number" name="bitki[]" value="<?php echo $query['bocek_sure']; ?>" required>

            <hr>

            <label class="section-title">İlaçlama</label>
            <div id="cbWrapper" class="parsley-checkbox">
              <label class="ckbox">
                <input type="checkbox" name="mantar[]" value="1" data-parsley-mincheck="2" data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" data-parsley-multiple="browser"><span>Mantar İlacı</span>
              </label>
              <label class="ckbox">
                <input type="checkbox" name="gubre[]" value="1" data-parsley-multiple="browser"><span>Gübre İlacı</span>
              </label>
              <label class="ckbox">
                <input type="checkbox" name="bocek[]" value="1" data-parsley-multiple="browser"><span>Böcek İlacı</span>
              </label>
            </div>
            <!-- form-group -->
            <div id="cbErrorContainer"></div>
            <div class="mg-t-20">
              <button type="submit" name="bitkiduzen" class="btn btn-primary pd-x-20" value="<?php echo $query['id']; ?>">Gönder</button>
            </div>
          </form>

          <?php 
          

          if (isset($_POST['bitki'])) {
			$query = $db->query("SELECT * FROM bitki WHERE id = '{$_POST['bitki'][0]}'")->fetch(PDO::FETCH_ASSOC);
			if ( $query ){
			    $mevcut = $query['bitki_miktar'];
			    $mevcut += $_POST['bitki'][1];

			 $query2 = $db->prepare("UPDATE bitki SET
			bitki_miktar=:bitki_miktar,
			bitki_maliyet=:bitki_maliyet

			WHERE id = :id");
			$update = $query2->execute(array(
			     "id" => $_POST['bitki'][0],
			     "bitki_miktar" => $mevcut,
			     "bitki_maliyet" => $_POST['bitki'][2]
			));
			if ( $update ){
			     
			}
			}




          
          }





          ?>
          
        </div>
      </div><!-- container -->
    </div><!-- slim-mainpanel -->

     <?php include 'footer.php'; ?>