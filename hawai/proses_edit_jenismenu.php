<?php
    //memanggil koneksi database
    include 'koneksi.php';

    //mengambil data dari inputan method 'post'
    $id_jenis = $_POST['id_jenis'];
	$nama_jenis = $_POST['nama_jenis'];
   

    //memasukkan ke dalam database
    $q = $koneksi->query("UPDATE jenis_menu SET id_jenis='$id_jenis', nama_jenis= '$nama_jenis'
	WHERE id_jenis = $id_jenis");

    //pengecekan berhasil
    if($q){
        header('location: jenismenu_list.php');
        exit();
	}
?>