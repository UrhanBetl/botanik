<?php
include 'baglan.php';
error_reporting('E_ALL');

$query = $db->query("SELECT * FROM bildirim_ayar WHERE id = '1'")->fetch(PDO::FETCH_ASSOC);
if ( $query ){
    $mailadresi = $query['mail'];
}


require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->SMTPSecure = 'ssl'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
$mail->Host = "rainfall.guzelhosting.com"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = 465; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "uyari@konakbotanik.ml"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
$mail->Password = "Delete386"; // Mail adresimizin sifresi
$mail->SetFrom("uyari@konakbotanik.ml", "Konak Botanik"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
$mail->AddAddress('furkan_salim_24@icloud.com'); // Mailin gönderileceği alıcı adres
$mail->Subject = "İlaçlama Bekleyen Bitkileriniz Var"; // Email konu başlığı
$mail->Body = "Lütfen detaylı bilgi için konakbotanik.ml adresini ziyaret edin!."; // Mailin içeriği
if(!$mail->Send()){
	echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
} else {
	echo "Email Gonderildi";
}
?>