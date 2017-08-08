
<?php 
include 'config/conn.php';
$idk = $_POST['idk'];
$nama = $_POST['nama'];
$lama = $_POST['lama'];
 
mysql_query("INSERT INTO komoditas VALUES('$idk','$nama','$lama')");
 
header("location:komoditas.php?pesan=input");
?>
