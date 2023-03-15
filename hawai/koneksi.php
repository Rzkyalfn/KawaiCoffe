<?php

$koneksi = mysqli_connect('localhost','root','','hawai');

//pengecekan koneksi database
if(mysqli_connect_errno()){
	echo "koneksi database gagal : " . mysqli_connect_error();
}

?>
