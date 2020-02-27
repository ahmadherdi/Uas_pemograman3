<html>
<body>
 
	
	<br/>
	<a href="input_transaksi.php">+ TAMBAH</a>
	<a href="home.php">Home</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>TRANSAKSI ID</th>
			<th>NAMA TRANSAKSI</th>
			<th>TANGGAL</th>
			<th>HARGA</th>
			<th>QTY</th>
			<th>BARANG ID</th>
			<th>NAMA BARANG</th>
		</tr>
		<?php 
		include 'koneksi.php';
		
		$data = mysqli_query($koneksi,"SELECT a.*,b.nama FROM transaksi a,barang b");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_transaksi']; ?></td>
				<td><?php echo $d['nama_transaksi']; ?></td>
				<td><?php echo $d['tgl_transaksi']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['qty']; ?></td>
				<td><?php echo $d['idbarang']; ?></td>
				<td><?php echo $d['nama']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>