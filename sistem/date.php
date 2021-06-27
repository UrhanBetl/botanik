
<?php 
$gold_uyelik_bas="30.1.2018";
$dizi=explode(".",$gold_uyelik_bas);
$gold_suresi=1;
echo "Bitiş tarihi " . date("d.m.Y", mktime(0, 0, 0, $dizi[1], $dizi[0]+$gold_suresi, $dizi[2]));
?>

 