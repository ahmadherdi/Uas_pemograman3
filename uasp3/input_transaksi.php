
<form method="POST" action="transaksiaksi.php">
<a href="home.php">Home</a>
<a href="indextransaksi.php">Lihat Data</a>
	<table>
		<tr>
			<td>ID TRANSAKSI</td>
			<td><input name="id_transaksi" type="number"></td>
		</tr>
	<tr>
			<td>NAMA TRANSAKSI</td>
			<td><input name="nama_transaksi" type="text"></td>
		</tr>
		<tr>
			<td>TANGGAL</td>
			<td><input name="tgl_transaksi" type="text"></td>
		</tr>
	<tr>
			<td>HARGA</td>
			<td><input name="harga" type="number"></td>
		</tr>
		<tr>
			<td>QTY</td>
			<td><input name="qty" type="number"></td>
		</tr>
		<tr>
			<td>ID BARANG</td>
			<td><input name="id_barang" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
</form>