<?php
    //memanggil koneksi database
    include 'koneksi.php';

    //mengambil data dari  method 'GET'
    $id_jenis = $_GET['id_jenis'];


    //memasukkan ke dalam database
    $q = $koneksi->query("DELETE FROM jenis_menu WHERE id_jenis = $id_jenis");

    //pengecekan berhasil
    if($q){
        header('location: jenismenu_list.php');
        exit();
    }
?>