<br/>
	
	<a href="komoditas.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include 'config/conn.php';
	$idk=$_GET['idk'];
	$query_mysql = mysql_query("SELECT * FROM komoditas WHERE idk='$idk'")or die(mysql_error());
	
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Id</td>
				<td>
					<input type="int" name="idk" value="<?php echo $data['idk'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
			</tr>	
			<tr>
				<td>Lama</td>
				<td><input type="int" name="lama" value="<?php echo $data['lama'] ?>"></td>					
			</tr>	
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>