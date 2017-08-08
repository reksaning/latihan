<?php 
include 'config/conn.php';
$idk = $_GET['idk'];
mysql_query("DELETE FROM komoditas WHERE idk='$idk'")or die(mysql_error());
 
header("location:komoditas.php?pesan=hapus");
?>