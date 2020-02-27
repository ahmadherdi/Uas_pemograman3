<html>
<body>
 
	
	<br/>
	<a href="input_kategori.php">+ Tambah</a>
	<a href="home.php">Home</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>KATEGORI ID</th>
			<th>NAMA</th>
		
		</tr>
		<?php 
		include 'koneksi.php';
		
		$data = mysqli_query($koneksi,"select * from kategori");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_kategori']; ?></td>
				<td><?php echo $d['nama_kategori']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>