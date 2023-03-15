<?php
    //memanggil koneksi database
    include 'koneksi.php';

    //mengambil data dari inputan method 'post'
    $id_menu = $_POST['id_menu'];
	$nama_menu	= $_POST['nama_menu'];
	$harga = $_POST['harga'];
	$id_jenis = $_POST['id_jenis'];

    //memasukkan ke dalam database
    $q = $koneksi->query("UPDATE menu SET nama_menu='$nama_menu', harga= '$harga', id_jenis= '$id_jenis'
	WHERE id_menu = $id_menu");

    //pengecekan berhasil
    if($q){
        header('location: menu.php');
        exit();
	}
?>