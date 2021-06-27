<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=webirent_zir;charset=utf8", "webirent_zir", "Delete386");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>