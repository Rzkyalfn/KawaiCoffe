<?php
// memanggil koneksi databse
	include 'koneksi.php';
	
// Mengambil data dari inputan method post
   $id_pelanggan = $_POST['id_pelanggan'];
   $no_meja = $_POST['no_meja'];
	$tgl_beli = $_POST['tgl_beli'];

    //Memasukkan ke dalam database
   $q = $koneksi->query("INSERT INTO 
    pembelian(id_pelanggan, no_meja,tgl_beli) VALUES('".$id_pelanggan."', '".$no_meja."','".$tgl_beli."')");

     // pengecekan berhasil

    if($q){
    header('Location: list_pembelian.php');
    exit();} 
    
	
	
?>