<?php
// memanggil koneksi databse
	include 'koneksi.php';
	
// Mengambil data dari inputan method post
	
   $jumlah = $_POST['jumlah'];
   

    //Memasukkan ke dalam database
   $q = $koneksi->query("INSERT INTO 
    item_pembelian(jumlah) VALUES('".$jumlah."')");

     // pengecekan berhasil

    if($q){
    header('Location: list_item_pembelian.php');
    exit();} 
    
	
	
?>