<?php
    //memanggil koneksi database
    include 'koneksi.php';

    //mengambil data dari  method 'GET'
    $id_pembelian = $_GET['id_pembelian'];


    //memasukkan ke dalam database
    $q = $koneksi->query("DELETE FROM pembelian WHERE id_pembelian = $id_pembelian");

    //pengecekan berhasil
    if($q){
        header('location: list_pembelian.php');
        exit();
    }
?>