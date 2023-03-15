<?php
// memanggil koneksi databse
	include 'koneksi.php';
	
// Mengambil data dari inputan method post
   $nama_pelanggan = $_POST['nama_pelanggan'];
   $no_hp = $_POST['no_hp'];
	$pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];

    //Memasukkan ke dalam database
   $q = $koneksi->query("INSERT INTO 
    pelanggan(nama_pelanggan, no_hp, pekerjaan, alamat) VALUES('".$nama_pelanggan."', '".$no_hp."','".$pekerjaan."','".$alamat."')");

     // pengecekan berhasil

    if($q){
    header('Location: list_pelanggan.php');
    exit();} 
    
	
	
?>