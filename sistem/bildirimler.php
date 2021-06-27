 <?php include 'header.php'; ?>
 <?php 
 $query = $db->query("SELECT * FROM bildirim_ayar WHERE id = '1'")->fetch(PDO::FETCH_ASSOC);
if ( $query ){
}


if (isset($_POST['mail'])) {
	$mail = $_POST['mail'];

$query = $db->prepare("UPDATE bildirim_ayar SET
mail = :mail
WHERE id = :id");
$update = $query->execute(array(
     "mail" => $mail,
     "id" => "1"
));
if ( $update ){
  header('Location: ?durum=ok');
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
            <h4 class="tx-inverse mg-b-3">Güncel Stok Durumu</h4>
          </div>
        </div>
        <div class="row no-gutters dashboard-chart-one">
          <div class="col-md-12 col-lg-12">
            <div class="card card-total">
              <p>Lütfen bildirimlerin gönderileceği mail adresini girin.</p>

              <form action="" method="POST" data-parsley-validate>
            <label class="section-title pd-x-20">Mail Adresi</label>
            <input type="mail" style="min-width: 250px"value="<?php echo $query['mail'];?>" name="mail" required>
            <!-- form-group -->
            <div id="cbErrorContainer"></div>
            <div class="mg-t-20">
              <button type="submit" class="btn btn-primary pd-x-20">Gönder</button>
            </div>
          </form>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <!-- col -->
         <!-- col -->
        </div>
      </div><!-- container -->
    </div><!-- slim-mainpanel -->




     <?php include 'footer.php'; ?>