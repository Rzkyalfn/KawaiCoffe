<?php
// memanggil koneksi databse
	include 'koneksi.php';
	
// Mengambil data dari inputan method post
   $nama_jenis = $_POST['jenismenu'];
   

    //Memasukkan ke dalam database
   $q = $koneksi->query("INSERT INTO 
    jenis_menu(nama_jenis) VALUES('".$nama_jenis."')");

     // pengecekan berhasil

    if($q){
    header('Location: jenismenu_list.php');
    exit();} 
    
	
	
?>