<?php 
include 'config/conn.php';
$idk = $_POST['idk'];
$nama = $_POST['nama'];
$lama = $_POST['lama'];
 
 
mysql_query("UPDATE komoditas SET nama='$nama', lama='$lama' WHERE idk='$idk'");

header("location:komoditas.php?pesan=update")
 ?>
