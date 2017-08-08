<br/>
	
	<a href="d_penjualan.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include 'conn.php';
	$idp=$_GET['idp'];
	$query_mysql = mysql_query("SELECT * FROM penjualan WHERE idp='$idp'")or die(mysql_error());
	
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Idp</td>
				<td>
					<input type="int" name="idp" value="<?php echo $data['idp'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tgl" value="<?php echo $data['tgl'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jumlah Permintaan</td>
				<td><input type="int" name="j_permintaan" value="<?php echo $data['j_permintaan'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jumlah Penjualan</td>
				<td><input type="int" name="j_penjualan" value="<?php echo $data['j_penjualan'] ?>"></td>					
			</tr>	
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>