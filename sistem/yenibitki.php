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
            <strong>İşlem Başarılı!</strong> Bitki başarıyla eklendi.
          </div>';
        }
         ?>
			 <form action="" method="POST" data-parsley-validate>
            <label class="section-title">Bitki Adı</label>
            <input type="text" name="bitki[]" required>
            <label class="section-title">Adet</label>
            <input type="number" name="bitki[]" placeholder="0" value="0" required>
            <label class="section-title">Birim Fiyat</label>
            <input type="number" name="bitki[]" placeholder="0.00" step="0.01" required>
            <label class="section-title">Mantar İlacı Periyodu (Gün)</label>
            <input type="number" name="bitki[]" placeholder="0" required>
            <label class="section-title">Gübre İlacı Periyodu (Gün)</label>
            <input type="number" name="bitki[]" placeholder="0" required>
            <label class="section-title">Böcek İlacı Periyodu (Gün)</label>
            <input type="number" name="bitki[]" placeholder="0" required>
            <!-- form-group -->
            <div id="cbErrorContainer"></div>
            <div class="mg-t-20">
              <button type="submit" class="btn btn-primary pd-x-20" value="5">Gönder</button>
            </div>
          </form>

          <?php 
          

          if (isset($_POST['bitki'])) {
			$query = $db->prepare("INSERT INTO bitki SET
bitki_adi = ?,
bitki_adet = ?,
bitki_fiyat = ?,
mantar_sure = ?,
gubre_sure =?,
bocek_sure=?");
$insert = $query->execute(array(
     $_POST['bitki'][0], $_POST['bitki'][1],  $_POST['bitki'][2],  $_POST['bitki'][3],  $_POST['bitki'][4],  $_POST['bitki'][5]
));
if ( $insert ){
    header('Location: yenibitki.php?durum=ok');
}




          
          }





          ?>
          
        </div>
      </div><!-- container -->
    </div><!-- slim-mainpanel -->

     <?php include 'footer.php'; ?>