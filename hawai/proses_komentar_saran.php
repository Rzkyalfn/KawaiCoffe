<?php
// memanggil koneksi databse
	include 'koneksi.php';
	
// Mengambil data dari inputan method post
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $komentar = $_POST['komentar'];

    //Memasukkan ke dalam database
   $q = $koneksi->query("INSERT INTO 
    saran_komentar_layanan(nama, email, komentar) VALUES('".$nama."', '".$email."','".$komentar."')");

     // pengecekan berhasil

    if($q){
    header('Location: komentar_saran_list.php');
    exit();} 
    
	
	
?>