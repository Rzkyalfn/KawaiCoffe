<?php
    //memanggil koneksi database
    include 'koneksi.php';

    //mengambil data dari  method 'GET'
    $id_pelanggan = $_GET['id_pelanggan'];


    //memasukkan ke dalam database
    $q = $koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan = $id_pelanggan");

    //pengecekan berhasil
    if($q){
        header('location: list_pelanggan.php');
        exit();
    }
?>