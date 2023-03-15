<?php
    //memanggil koneksi database
    include 'koneksi.php';

    //mengambil data dari inputan method 'post'
    $id_pembelian = $_POST['id_pembelian'];
	$id_menu = $_POST['id_menu'];
    $jumlah = $_POST['jumlah'];

    //memasukkan ke dalam database
    $q = $koneksi->query("UPDATE item_pembelian SET id_pembelian='$id_pembelian', id_menu= '$id_menu', jumlah= '$jumlah'
	WHERE id_pembelian = $id_pembelian");

    //pengecekan berhasil
    if($q){
        header('location: list_item_pembelian.php');
        exit();
	}
?>