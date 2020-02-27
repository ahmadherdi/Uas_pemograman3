<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$barang= $_POST['id_barang'];
$nama= $_POST['nama'];
$kategori= $_POST['kategori_id'];
$satuan = $_POST['satuan_id'];
// menginput data ke database
mysqli_query($koneksi,"insert into barang values('$barang','$nama','$kategori','$satuan')");
// mengalihkan halaman kembali ke input
header("location:input_barang.php");

?>