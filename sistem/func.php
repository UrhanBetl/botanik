<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include("baglan.php");

if (isset($_POST['giris'])) {
	$name = $_POST['username'];
	$pass = md5($_POST['password']);

	$query  = $db->query("SELECT * FROM user WHERE username='$name' && password='$pass'",PDO::FETCH_ASSOC);
		if ( $say = $query -> rowCount() ){
			if( $say > 0 ){
				session_start();
				$_SESSION['oturum']=true;
				$_SESSION['name']=$name;
				header('Location: login.php?onay=1');
				
			}else{
				header('Location: login.php?hata=1');
			}
		}else{
		header('Location: login.php?hata=1');
		}
}


if (isset($_POST['bitkiduzen'])) {
	$id = $_POST['bitkiduzen'];

	$bitki_adi 		= $_POST['bitki'][0];
	$bitki_adet		= $_POST['bitki'][1];
	$bitki_fiyat	= $_POST['bitki'][2];
	$mantar_sure	= $_POST['bitki'][3];
	$gubre_sure		= $_POST['bitki'][4];
	$bocek_sure		= $_POST['bitki'][5];
	
$query3 = $db->query("SELECT * FROM ilac", PDO::FETCH_ASSOC);
if ( $query3->rowCount() ){
     foreach( $query3 as $row3 ){
         if ($row3['id'] == "1") {
         	$bocek_toplam = $row3['ilac_toplam'];
         	$bocek_ilaclama = $row3['ilaclama'];
         	$bocek_miktar = $row3['ilac_miktar'];
         	$bocek_maliyet = $row3['ilac_maliyet'];
         }elseif ($row3['id'] == "2") {
         	$gubre_toplam = $row3['ilac_toplam'];
         	$gubre_ilaclama = $row3['ilaclama'];
         	$gubre_miktar = $row3['ilac_miktar'];
         	$gubre_maliyet = $row3['ilac_maliyet'];
         }else{
         	$mantar_toplam = $row3['ilac_toplam'];
         	$mantar_ilaclama = $row3['ilaclama'];
         	$mantar_miktar = $row3['ilac_miktar'];
         	$mantar_maliyet = $row3['ilac_maliyet'];
         }
     }
}






$query = $db->query("SELECT * FROM bitki WHERE id = '{$_POST['bitkiduzen']}'")->fetch(PDO::FETCH_ASSOC);
	if ( $query ){
	    $mevcut = $query['bitki_adet'];
	    $mevcut += $bitki_adet;
	if ($_POST['mantar'][0] == 1) {
		$son_mantar = date("Y-m-d");
		$kalan_mantar = ceil(($mantar_toplam - $query['bitki_adet'])/$mantar_ilaclama);
		$kullanim_mantar = ceil($query['bitki_adet']/$mantar_ilaclama);
					$query2 = $db->prepare("INSERT INTO tuketim SET
ilac_id = :ilac_id,
bitki_id = :bitki_id,
ay = :ay,
yil=:yil,
ilac_miktar =:ilac_miktar,
bitki_miktar =:bitki_miktar,
maliyet=:maliyet");
$insert = $query2->execute(array(
      "ilac_id" => "3",
      "bitki_id" => $id,
      "ay" => date("m"),
      "yil" => date("Y"),
      "ilac_miktar" => $kullanim_mantar,
      "bitki_miktar" => $query['bitki_adet'],
      "maliyet" => $mantar_maliyet*$kullanim_mantar
));
if ( $insert ){
    $last_id = $db->lastInsertId();
    print "insert işlemi başarılı!";
}
	}else{
		$son_mantar = $query['son_mantar'];
		$kalan_mantar = $mantar_miktar;
	}
	if ($_POST['bocek'][0] == 1) {
		$son_bocek = date("Y-m-d");
		$kalan_bocek = ceil(($bocek_toplam - $query['bitki_adet'])/$bocek_ilaclama);
		$kullanim_bocek = ceil($query['bitki_adet']/$bocek_ilaclama);
							$query3 = $db->prepare("INSERT INTO tuketim SET
ilac_id = :ilac_id,
bitki_id = :bitki_id,
ay = :ay,
yil=:yil,
ilac_miktar =:ilac_miktar,
bitki_miktar =:bitki_miktar,
maliyet=:maliyet");
$insert = $query3->execute(array(
      "ilac_id" => "1",
      "bitki_id" => $id,
      "ay" => date("m"),
      "yil" => date("Y"),
      "ilac_miktar" => $kullanim_bocek,
      "bitki_miktar" => $query['bitki_adet'],
      "maliyet" => $bocek_maliyet*$kullanim_bocek
));
if ( $insert ){
    $last_id = $db->lastInsertId();
    print "insert işlemi başarılı!";
}
	}else{
		$son_bocek = $query['son_bocek'];
		$kalan_bocek = $bocek_miktar;
	}
	if ($_POST['gubre'][0] == 1) {
		$son_gubre 		= date("Y-m-d");
		$kalan_gubre 	= ceil(($gubre_toplam - $query['bitki_adet'])/$gubre_ilaclama);
		$kullanim_gubre = ceil($query['bitki_adet']/$gubre_ilaclama);
							$query4 = $db->prepare("INSERT INTO tuketim SET
ilac_id = :ilac_id,
bitki_id = :bitki_id,
ay = :ay,
yil=:yil,
ilac_miktar =:ilac_miktar,
bitki_miktar =:bitki_miktar,
maliyet=:maliyet");
$insert = $query4->execute(array(
      "ilac_id" => "2",
      "bitki_id" => $id,
      "ay" => date("m"),
      "yil" => date("Y"),
      "ilac_miktar" => $kullanim_gubre,
      "bitki_miktar" => $query['bitki_adet'],
      "maliyet" => $gubre_maliyet*$kullanim_gubre
));
if ( $insert ){
    $last_id = $db->lastInsertId();
    print "insert işlemi başarılı!";
}
	}else{
		$son_gubre = $query['son_gubre'];
		$kalan_gubre = $gubre_miktar;
	}


	$query = $db->prepare("UPDATE ilac SET
ilac_miktar = :ilac_miktar,
ilac_toplam = :ilac_toplam
WHERE id = :id");
$update = $query->execute(array(
     "ilac_miktar" => $kalan_bocek,
     "ilac_toplam" => ($kalan_bocek*$bocek_ilaclama),
     "id" => "1"
));
if ( $update ){
}
	$query = $db->prepare("UPDATE ilac SET
ilac_miktar = :ilac_miktar,
ilac_toplam = :ilac_toplam
WHERE id = :id");
$update = $query->execute(array(
     "ilac_miktar" => $kalan_gubre,
     "ilac_toplam" => ($kalan_gubre*$gubre_ilaclama),
     "id" => "2"
));
if ( $update ){
}

	$query = $db->prepare("UPDATE ilac SET
ilac_miktar = :ilac_miktar,
ilac_toplam = :ilac_toplam
WHERE id = :id");
$update = $query->execute(array(
     "ilac_miktar" => $kalan_mantar,
     "ilac_toplam" => ($kalan_mantar*$mantar_ilaclama),
     "id" => "3"
));





if ( $update ){
}






			 $query2 = $db->prepare("UPDATE bitki SET
			bitki_adi 	=:bitki_adi,
			bitki_adet	=:bitki_adet,
			bitki_fiyat	=:bitki_fiyat,
			mantar_sure	=:mantar_sure,
			gubre_sure	=:gubre_sure,
			bocek_sure	=:bocek_sure,
			son_mantar	=:son_mantar,
			son_gubre	=:son_gubre,
			son_bocek	=:son_bocek

			WHERE id = :id");
			$update = $query2->execute(array(
			    "id" => $id,
			    "bitki_adi" 	=>$bitki_adi,
				"bitki_adet"	=>$mevcut,
				"bitki_fiyat"	=>$bitki_fiyat,
				"mantar_sure"	=>$mantar_sure,
				"gubre_sure"	=>$gubre_sure,
				"bocek_sure"	=>$bocek_sure,
				"son_mantar"	=>$son_mantar,
				"son_gubre"		=>$son_gubre,
				"son_bocek"		=>$son_bocek	
			));
			if ( $update ){
			    header('Location: bitkilistesi.php?durum=ok');
			}
			}

			///////////
}




 ?>