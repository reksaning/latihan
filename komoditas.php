
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
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Nama</th>
			<th>Lama Tanam</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "config/conn.php";
		$query_mysql = mysql_query("SELECT * FROM komoditas")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['idk']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['lama']; ?></td>
			<td>
				<a class="edit" href="edit.php?idk=<?php echo $data['idk']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?idk=<?php echo $data['idk']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
		</table>