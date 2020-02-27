<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$satuanid = $_POST['id_satuan'];
$nama = $_POST['nama'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into satuan values('$satuanid','$nama')");
// mengalihkan halaman kembali ke input.php
header("location:input_satuan.php");

?>