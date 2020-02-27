<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kategoriid = $_POST['id_kategori'];
$nama = $_POST['nama'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into kategori values('$kategoriid','$nama')");
// mengalihkan halaman kembali ke input.php
header("location:input_kategori.php");

?>