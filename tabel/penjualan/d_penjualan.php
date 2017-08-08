
<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="\latihan\tabel\penjualan\input.php">+ Tambah Data Baru</a>
 
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Id Penjualan</th>
			<th>Tanggal</th>
			<th>Jumlah Permintaan</th>
			<th>Jumlah Terjual</th>		
		</tr>
		<?php 
		$cn=@mysql_connect("localhost","root","") or die("gagal konek bos");
		mysql_select_db("latihan") or die("gagal database e");
		
 		?>
		<?php 
		$query_mysql = mysql_query("SELECT * FROM penjualan")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['idp']; ?></td>
			<td><?php echo $data['tgl']; ?></td>
			<td><?php echo $data['j_permintaan']; ?></td>
			<td><?php echo $data['j_penjualan']; ?></td>
			<td>
				<a class="edit" href="\latihan\tabel\penjualan\edit.php?idk=<?php echo $data['idk']; ?>">Edit</a> |
				<a class="hapus" href="\latihan\tabel\penjualan\hapus.php?idk=<?php echo $data['idk']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
		</table>