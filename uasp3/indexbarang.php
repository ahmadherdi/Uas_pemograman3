<html>
<body>
 
	
	<br/>
	<a href="input_barang.php">+ Tambah</a>
	<a href="home.php">Home</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>BARANG ID</th>
			<th>NAMA</th>
			<th>KATEGORI ID</th>
			<th>NAMA KATEGORI</th>
			<th>SATUAN ID</th>
			<th>NAMA SATUAN</th>
		
		</tr>
		<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select a.id_barang,a.nama,a.kategori_id,b.nama_kategori,a.satuan_id,c.nama_satuan from barang a,kategori b,satuan c where b.id_kategori=a.kategori_id AND c.id_satuan=a.satuan_id");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_barang']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['kategori_id']; ?></td>
				<td><?php echo $d['nama_kategori']; ?></td>
				<td><?php echo $d['satuan_id']; ?></td>
				<td><?php echo $d['nama_satuan']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>