<?php 
error_reporting('E_ALL');
include 'baglan.php';
require("class.phpmailer.php");



$kontrol = "0";


$query = $db->query("SELECT * FROM bitki", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
$son_ilac=$row['son_mantar'];
$dizi=explode("-",$son_ilac);

$ilaclama_suresi=$row['mantar_sure'];



if (date('Y-m-d') == date("Y-m-d", mktime(0, 0, 0, $dizi[1], $dizi[2]+$ilaclama_suresi, $dizi[0]))) {
	$bildirim = $row['bitki_adi']." için Mantar ilaçlaması bugün yapılmalı.";
	$kontrol = "1";
	$query = $db->prepare("INSERT INTO bildirimler SET
uyari = ?,
tarih = ?
");
$insert = $query->execute(array(
     $bildirim,date('Y-m-d')
));
if ( $insert ){
    $last_id = $db->lastInsertId();
}

}


echo "<br>";
$son_ilac=$row['son_gubre'];
$dizi=explode("-",$son_ilac);
$ilaclama_suresi=$row['gubre_sure'];
if (date('Y-m-d') == date("Y-m-d", mktime(0, 0, 0, $dizi[1], $dizi[2]+$ilaclama_suresi, $dizi[0]))) {
	$bildirim = $row['bitki_adi']." için Gübre ilaçlaması bugün yapılmalı.";
	$kontrol = "1";
	$query = $db->prepare("INSERT INTO bildirimler SET
uyari = ?,
tarih = ?
");
$insert = $query->execute(array(
     $bildirim,date('Y-m-d')
));
if ( $insert ){
    $last_id = $db->lastInsertId();
}
}
echo "<br>";
$son_ilac=$row['son_bocek'];
$dizi=explode("-",$son_ilac);
$ilaclama_suresi=$row['bocek_sure'];
if (date('Y-m-d') == date("Y-m-d", mktime(0, 0, 0, $dizi[1], $dizi[2]+$ilaclama_suresi, $dizi[0]))) {
	$bildirim = $row['bitki_adi']." için Böcek ilaçlaması bugün yapılmalı.";
	$kontrol = "1";
	$query = $db->prepare("INSERT INTO bildirimler SET
uyari = ?,
tarih = ?
");
$insert = $query->execute(array(
     $bildirim,date('Y-m-d')
));
if ( $insert ){
    $last_id = $db->lastInsertId();
}
}
echo "<br>";




     }
}


if ($kontrol == "1") {
	include 'mail.php';
	echo 'mail gönderdim';
}






 ?>