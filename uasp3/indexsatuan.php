<!DOCTYPE html>
<html>
<body>
 
	
	<br/>
	<a href="input_satuan.php">+ Tambah</a>
	<a href="home.php">Home</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>SATUAN ID</th>
			<th>Nama</th>
		
		</tr>
		<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from satuan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_satuan']; ?></td>
				<td><?php echo $d['nama_satuan']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>