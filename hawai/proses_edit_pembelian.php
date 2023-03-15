<?php
    //memanggil koneksi database
    include 'koneksi.php';

    //mengambil data dari inputan method 'post'
    $id_pembelian = $_POST['id_pembelian'];
	$id_pelanggan = $_POST['id_pelanggan'];
    $no_meja = $_POST['no_meja'];
    $tgl_beli = $_POST['tgl_beli'];

    //memasukkan ke dalam database
    $q = $koneksi->query("UPDATE pembelian SET id_pelanggan='$id_pelanggan', no_meja= '$no_meja', tgl_beli= '$tgl_beli'
	WHERE id_pembelian = $id_pembelian");

    //pengecekan berhasil
    if($q){
        header('location: list_pembelian.php');
        exit();
	}
?>