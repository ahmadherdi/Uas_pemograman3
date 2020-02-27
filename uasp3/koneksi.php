<?php
$koneksi=mysqli_connect("localhost:3306","root","","uass");
if (mysqli_connect_errno()){
	echo "KONEKSI DATABASE GAGAL:".mysqli_connect_error();
}

?>