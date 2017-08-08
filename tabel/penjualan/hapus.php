<?php 
include 'conn.php';
$idp = $_GET['idp'];
mysql_query("DELETE FROM penjualan WHERE idp='$idp'")or die(mysql_error());
 
header("location:latihan\tabel\penjualan\d_penjualan?pesan=hapus");
?>