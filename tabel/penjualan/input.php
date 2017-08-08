<?php 
include "navigbar.php";

 ?>

 <html>
 <body>
<a href="komoditas.php">Lihat Semua Data</a>
 <br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>idk</td>
				<td><input type="int" name="idk"></td>					
			</tr>	
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>lama tanam</td>
				<td><input type="int" name="lama"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="submit"></td>					
			</tr>				
		</table>
	</form>

	</body>
</html>