<?php
// memanggil koneksi databse
	include 'koneksi.php';
	
// Mengambil data dari inputan method post
   $nama_menu = $_POST['nama_menu'];
   $harga = $_POST['harga'];
	$id_jenis = $_POST['id_jenis'];

    //Memasukkan ke dalam database
   $q = $koneksi->query("INSERT INTO 
    menu(nama_menu, harga, id_jenis) VALUES('".$nama_menu."', '".$harga."','".$id_jenis."')");

     // pengecekan berhasil

    if($q){
    header('Location: menu.php');
    exit();} 
    
	
	
?>