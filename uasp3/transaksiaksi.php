<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$trans=$POST['id_transaksi'];
	$namatransi=$_POST['nama_transaksi'];
	$tgl=$_POST['tgl_transaksi'];
	$harga=$_POST['harga'];
	$qty=$_POST['qty'];
	$bara=$POST['idbarang'];
 
// menginput data ke database
$data=mysqli_query($koneksi,"insert into transaksi values('$trans','$namatransi','$tgl','$harga','$qty','$$bara')");
// mengalihkan halaman kembali ke innput.php
header("location:indextransaksi.php");

?>